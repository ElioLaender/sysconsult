<?php

require_once 'config/AutoLoadConfig.php';

class PayController extends ControllerConfig {

    private $email = "laenderquadros@gmail.com",
            $token = "A768AC484846404BBB6235DF037B1EC6",
            $page  = "https://ws.sandbox.pagseguro.uol.com.br",
            $route, 
            $objSer, 
            $objPaciDAO, 
            $objAlert, 
            $objNotifc, 
            $paymentRequest, 
            $objPag;

    public function __construct()
    {
        parent::__construct();
        $this->objSer = new ServicosDAO();
        $this->objPaciDAO = new PacienteDAO();
        $this->objAlert = new AlertasDAO();
        $this->objNotifc = new NotificationsDAO();
        $this->paymentRequest = new PagSeguroPaymentRequest();
        $this->objPag = new PagamentoDAO();
    }
            
    public function check01()
    {
        $this->route = RouteConfig::rotas();
        $this->view->set('servicos', $this->objSer->selectServices("viewUserCheck"));
        $this->view->render($this->route['CHECK01']);
    }

    public function check02()
    {
        $his->route = RouteConfig::rotas();
        $this->view->render($this->route['CHECK02']);
    }

    public function check03()
    {
        $this->route = RouteConfig::rotas();
        $this->view->render($this->route['CHECK03']);
    }

    #seta o status do anuncio de acordo com a situação no pague seguro
    public function updatePayStatus($statusPag, $anunId)
    {
        $this->objPaciDAO->updateStatus($statusPag, $anunId);
    }

    #responsável por enviar o checkout para o pague seguro
    public function checkOutPay()
    {
        $name = $_POST['nome'];
        $email = $_POST['email'];
        $ddd = $_POST['ddd'];
        $cpf = $_POST['cpf'];
        $tel = $_POST['tel'];
        $cidade = $_POST['cida'];
        $estado = $_POST['uf'];

        $idRef = $this->objPaciDAO->newPaciente($name,$tel,$email,$cidade,$estado,$cpf,$ddd); 
        #persiste alerta sobre a inserção deste paciente.	
        $this->objAlert->insertAlert
        (
            "Solicitação de atendimento",
            $name." efetuou uma solicitação de atendimento, visualize o prontuário para mais informações.",
            $idRef,
            "?controller=Paciente&action=viewProntuario&ref=".$idRef
        );

        $this->objNotifc->incrementAlert();
        $codItem = $idRef; //id gerado para o usuario.
        $pacoteDescri = "Pagamento referente a consulta com profissional de Psicologia.";
        $valor = $_POST['precoPla'];
        $nomePla = $_POST['nomePla'];

        $this->paymentRequest->addItem
        (
            $codItem,
            $nomePla." - ".$pacoteDescri,
             1,
             $valor
        );

        $this->paymentRequest->setShippingType(3);

        $this->paymentRequest->setSender(
            "$name",
            "$email",
            "$ddd",
            "$tel",
            "$cpf"
        );

        $this->paymentRequest->setCurrency("BRL");
        // Referenciando a transação do PagSeguro em seu sistema
        $this->paymentRequest->setReference($codItem);
        // URL para onde o comprador será redirecionado (GET) após o fluxo de pagamento
        $this->paymentRequest->setRedirectUrl("http://www.sysconsult.semprenegocio.com.br/?controller=Pay&action=check03");
        // URL para onde serão enviadas notificações (POST) indicando alterações no status da transação
        $this->paymentRequest->addParameter('notificationURL', 'http://www.sysconsult.semprenegocio.com.br/?controller=Pay&action=payNotifications');
        try 
        {
            $credentials = PagSeguroConfig::getAccountCredentials(); // getApplicationCredentials()
            $checkoutUrl = $this->paymentRequest->register($credentials);
            @header("Location: ". $checkoutUrl);

        } catch (PagSeguroServiceException $e) 
        {
            die($e->getMessage());
        }
    }#encerra checkOutPay
    
    #depois fazer uma varificação para enviar email para nós se houver algum status fora de aguardando e de aprovado!.. Para podermos resolver.
    #realiza o controle das notificações do PagSeguro
    public function payNotifications()
    {
        if (isset($_POST['notificationType']) && $_POST['notificationType'] == "transaction") 
        {
            $url = $this->page."/v2/transactions/notifications/" . $_POST['notificationCode'] . "?email=" . $this->email . "&token=" . $this->token;

            #realiza consulta no site do pagSeguro via biblioteca curl
            $curl = curl_init($url);
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            $transationCurl = curl_exec($curl);
            curl_close($curl);
            $transaction = simplexml_load_string($transationCurl);
            /*
                        $name = 'Downloads/arquivo.txt';
                        $text = "---".$transaction->reference."---".$transaction->shipping->address->district;
                        $file = fopen($name, 'a');
                        fwrite($file, $text);
                        fclose($file);
            */
            #antes de persistir, verificar se o codigo já existe, se existeir realiza apenas update. (ver se vai ser o caso)
            //retorna verdadeiro se existir e falso caso contrário.
            if($this->objPag->registerVerify($transaction->code))
            {
                #realiza update no registro
                $this->objPag->pagUpdate
                (
                    $transaction->date,
                    $transaction->code,
                    $transaction->reference,
                    $transaction->type,
                    $transaction->status,
                    $transaction->cancellationSource,
                    $transaction->lastEventDate,
                    $transaction->paymentMethod->type,
                    $transaction->paymentMethod->code,
                    $transaction->grossAmount,
                    $transaction->discountAmount,
                    $transaction->netAmount,
                    $transaction->escrowEndDate,
                    $transaction->extraAmount,
                    $transaction->installmentCount,
                    $transaction->itemCount,
                    $transaction->items->item->id,
                    $transaction->items->item->description,
                    $transaction->items->item->amount,
                    $transaction->items->item->quantity,
                    $transaction->sender->email,
                    $transaction->sender->name,
                    $transaction->sender->phone->areaCode,
                    $transaction->sender->phone->number,
                    $transaction->shipping->type,
                    $transaction->shipping->cost,
                    $transaction->shipping->address->country,
                    $transaction->shipping->address->state,
                    $transaction->shipping->address->city,
                    $transaction->shipping->address->postalCode,
                    $transaction->shipping->address->district,
                    $transaction->shipping->address->street,
                    $transaction->shipping->address->number,
                    $transaction->shipping->address->complement
                );

            #persiste alerta sobre a inserção deste paciente.
            $this->objNotifc->incrementAlert();
            $this->objAlert->insertAlert
            (
                "Pagamento - ".$transaction->sender->name,
                "Atualização no status de pagamento.",
                $transaction->reference,
                "?controller=Paciente&action=viewProntuario&ref=".$transaction->reference
            );

        } else 
        {

            #persiste novo pagamento
            $this->objPag->pagPersist
            (
                $transaction->date,
                $transaction->code,
                $transaction->reference,
                $transaction->type,
                $transaction->status,
                $transaction->cancellationSource,
                $transaction->lastEventDate,
                $transaction->paymentMethod->type,
                $transaction->paymentMethod->code,
                $transaction->grossAmount,
                $transaction->discountAmount,
                $transaction->netAmount,
                $transaction->escrowEndDate,
                $transaction->extraAmount,
                $transaction->installmentCount,
                $transaction->itemCount,
                $transaction->items->item->id,
                $transaction->items->item->description,
                $transaction->items->item->amount,
                $transaction->items->item->quantity,
                $transaction->sender->email,
                $transaction->sender->name,
                $transaction->sender->phone->areaCode,
                $transaction->sender->phone->number,
                $transaction->shipping->type,
                $transaction->shipping->cost,
                $transaction->shipping->address->country,
                $transaction->shipping->address->state,
                $transaction->shipping->address->city,
                $transaction->shipping->address->postalCode,
                $transaction->shipping->address->district,
                $transaction->shipping->address->street,
                $transaction->shipping->address->number,
                $transaction->shipping->address->complement);
        }

            #atualiza na base de dados o status do anuncio
            $this->updatePayStatus($transaction->status, $transaction->reference);
        }
    }
}

