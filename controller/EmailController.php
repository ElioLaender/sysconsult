<?php

require_once 'config/AutoLoadConfig.php';

class EmailController extends ControllerConfig {

//verificar se realmente é necessário um controller para essa finalidade
    private $route,
    $objTemp,
    $objDataAtend,
    $objContato,
    $objFuncPass;

    public function __construct()
    {
        parent::__construct();
        $this->objTemp = new EmailTemplates();
        $this->objDataAtend = new DataAtendimentoDAO();
        $this->objContato = new ContatoDAO();
        $this->objFuncPass = new FunctionPass();
    }

    #solicita envio de email alertando o usuário de que um paciente entrou em contato.
    public function SenderContactNotification(){}

    #envio de email avisando o psicologo que ele possui uma nova notificação no painel
    public function senderAlertNotification(){}

    #Envia um email para o paciente contendo o código para acompanhar seu status de pagamento
    public function senderPacienteContrato(){}

    #Terapeuta envia mensagem para o paciente a partir do prontuário do mesmo
    public function senderPacienteMessager()
    {
        $this->senderEmail
        (
            RequestConfig::getPost('emailPaci'),
            RequestConfig::getPost('nomePaci'),
            RequestConfig::getPost('assunto'),
            $this->objTemp->messagetPacient
            (
                RequestConfig::getPost('nome'),
                RequestConfig::getPost('tel'),
                RequestConfig::getPost('email'),
                "www.sysconsulte.com.br",
                RequestConfig::getPost('assunto'),
                RequestConfig::getPost('mensagem')
            )
        );
        header("location: ?controller=Paciente&action=viewProntuario&ref=".RequestConfig::getPost('ref'));
    }
    #envia mensagem lembrando usuário da consulta. Lembrando que esta também pode ser enviada juntamente para o analista que agendou
    public function senderAlertConsult()
    {
        $row = $this->objDataAtend->dadosNotification();

	    echo "Teste".$row[$i]['paciente_nome'];

        for($i = 0; $i < count($row); $i++){

            $mensagem = "Olá ".$row[$i]['paciente_nome'].", tudo bem? Lembrando que você possui um atendimento agendado hoje às ".$row[$i]['da_hour']."<br/><br/><br/>".$row[$i]['da_obs'];

            $this->senderEmail
            (
                $row[$i]['paciente_email'],
                $row[$i]['paciente_nome'],
                "Lembrete de Consulta",
                $this->objTemp->messagetPacient
                (
                    $row[$i]['admin_nome'],
                    $row[$i]['admin_tel'],
                    $row[$i]['admin_email'],
                    "www.sysconsulte.com.br",
                    "Lembrete de Consulta",
                    $mensagem
                )
            );

            $this->objDataAtend->updateAlertNotification($row[$i]['da_id']);

            #verifica se o envio é mutuo, caso for envia o email também para o administrador
            if($row[$i]['da_envio_mutuo'] == 1){

                $mensagemAdm = "Olá ".$row[$i]['admin_nome'].". Lembrando que você possui um atendimento agendado para o paciente ".$row[$i]['paciente_nome']." hoje às ".$row[$i]['da_hour']."<br/><br/><br/>".$row[$i]['da_obs'];

                $this->senderEmail
                (
                    $row[$i]['admin_email'],
                    $row[$i]['admin_nome'],
                    "Lembrete de Atendimento",
                    $this->objTemp->messagetPacient($row[$i]['admin_nome'],
                    $row[$i]['admin_tel'],
                    $row[$i]['admin_email'],
                    "www.sysconsulte.com.br",
                    "Lembrete de Consulta",$mensagemAdm
                )
            );
                #Cadastrar notificação para alertar administrador sobre o atendimento no painel.
                #Ps: ver se vai fazer aqui ou se vai fazer somente com o campo de setar o dia do atendimento.
            }
        }
    }

    #resposta de mensagem recebida pelo home do site
    public function respMessageHome()
    {
        $this->senderEmail
        (
            RequestConfig::getPost('emailDes'),
            RequestConfig::getPost('nameDes'),
            "Resposta contato - ".RequestConfig::getPost('nomeAdm'),
            $this->objTemp->messagetPacient
            (
                RequestConfig::getPost('nomeAdm'),
                RequestConfig::getPost('telAdm'),
                RequestConfig::getPost('emailAdm'),
                "www.sysconsulte.com.br",
                RequestConfig::getPost('assunto'),
                RequestConfig::getPost('mensagem')
            )
        );

        #lógica para passar o status da mensagem para respondido
        $this->objContato->alterStatusResp(RequestConfig::getPost('ref'));
        header("location: ?controller=Dashboard&action=viewRespMessage&ref=".RequestConfig::getPost('ref'));
    }

    public function senderEmail($email,$name,$assuntoCli,$mensagem)
    {
        $assunto = $assuntoCli;
        $mensagem = $mensagem;
        $email = $email; //deverá ser passado o email do usuário do sistema
        $nome = $name; //deverá ser passado o nome do usuário do sistema

        $objMailer = new PHPMailer();
        #define endereço do destinatário.
        $objMailer->AddAddress($email, $nome);
        #seta conexão como SMTP
        $objMailer->IsSMTP();
        #seta endereço do servidor de envio.
        $objMailer->Host = "smtp.gmail.com";
        #Ativando conexão SMTP
        $objMailer->SMTPAuth = true;
        #setanto o protocolo de conexão
        $objMailer->SMTPSecure = "ssl";
        #setando a porta de conexão (Verificar se a locaweb utiliza esta porta.)
        $objMailer->Port = 465; //necessário alterar a porta smtp do php.ini também para 465(google)
        #setando email de autenticação
        $objMailer->Username = "laenderquadros@gmail.com";
        #password
        $objMailer->Password = "livia2008";//Colocar senha do meu email.
        #Configuração de dados do remetente.
        $objMailer->From = 'laenderquadros@gmail.com';
        #Nome
        $objMailer->FromName = "Notificação - SysConsulte";
        #configura a mensagem como html
        $objMailer->IsHTML(true);
        #solucionar possíveis problemas de acentuação
        $objMailer->CharSet = 'UTF-8';
        #Configuração de texto e mensagem
        #assunto
        $objMailer->Subject  = $assunto;
        #mensagem
        $objMailer->Body = $mensagem;
        #mensagem como texto puro
        $objMailer->AltBody = trim(strip_tags($mensagem));
        #recebe a resposta se o email foi enviado com sucesso na forma de true/false
        $sucess = $objMailer->Send();
        #zera as variáveis
        $objMailer->ClearAllRecipients();
        $objMailer->ClearAttachments();

        #faz verificação se o email foi enviado com sucesso
        if ($sucess)
        {
            return true;
        } else 
        {
            return false;
        }
    }

    #Envia email para restaurar a senha.
    public function emailPassRecover()
    {
        #instancia classe para gerar nova senha
        $newPass = $this->objFuncPass->passGeneretor();
        $email = $_POST['email'];
        $objAdmin = new AdminDAO();
        $row = $objAdmin->returnInfUser($email);

        if(count($row) > 0)
        {
            $assunto = "Recuperação de senha SysConsulte";
            $mensagem = "   <html>
                                    <body>
                                        <table cellpadding='10' style='background-color: rgb(250,250,250); border: 1px solid #4E69B2; font-family: arial, helvetica, sans-serif; padding: 20px; width: 100%;'>
                                           <tr>
                                             <td>
                                               <h1> <strong style='color:  #333333; font-size: 25px;'>Olá " . $row[0]['admin_nome'] . ", segue abaixo sua nova senha de acesso. Recomendandos a troca desta no campo \"Editar minha conta\", localizada no
                                                    painel gerenciável.</strong></h1>
                                                   <p style='color:  #333333; font-size: 20px;'>Email: " . $row[0]['admin_email'] . " </p>
                                                   <p style='color:  #333333; font-size: 20px;'>Nova senha: " . $newPass . "</p>
                                                   <p style='color:  #333333; font-size: 20px;'><a href='http://www.semprenegocio.com.br/?controller=Dashboard&action=ViewLogin'>Acesse sua conta</a></p>
                                                   <p></br><strong style='color:  #333333; font-size: 20px;'>Agradecemos a utilização. Equipe SempreNegocio.</strong></p>
                                               <center><a href='www.semprenegocio.com.br'><img alt='SempreNegocio' height='50' width='50' src='http://www.semprenegocio.com.br/view/assets/imagens/logo0A.png'></a></center>
                                             </td>
                                            </tr>
                                         </table>
                                     </body>
                                     </html>";

            #caso ocorrer tudo bem o alter no banco, envia email.
            if($objAdmin->loginUpdateRec($newPass,$email))
            { 
                #faz verificação se o email foi enviado com sucesso
                if ($this->senderEmail($row[0]['admin_email'],$row[0]['admin_nome'],$assunto,$mensagem)) 
                {
                    echo "<p>Foi enviado um email contendo os dados de recuperação da sua conta.</p>";
                } else 
                {
                    echo "<p class='textErr'>Não foi possível enviar email de recuperação da conta, tente mais tarde ou entre em contato com o suporte. =/</p>" .
                        "<button type='button' class='fec'></button>";
                }
                #fim if insert
            } else 
            {
                echo "Não foi possível persistir alteração da senha na base de dados.";
            }
        } else 
        {
            echo "Email não se encontra cadastrado na base de dados, verifique o email.";
        }
    }
}#encerra email controller

