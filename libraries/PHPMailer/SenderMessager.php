<?php

include_once'libraries/PHPMailer/class.phpmailer.php';
include_once'libraries/PHPMailer/class.smtp.php';


class SenderMessager {

    public function senderEmail($email,$name,$assunto,$mensagem){


        $assunto = "Notificação SysConsulte";
        $mensagem = $_POST['message'];
        $email = $_POST['email']; //deverá ser passado o email do destinatário
        $nome = $_POST['name']; //deverá ser passado o nome do destinatário.


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
        $objMailer->Password = "193945";//Colocar senha do meu email.
        #Configuração de dados do remetente.
        $objMailer->From = 'laenderquadros@gmail.com';
        #Nome
        $objMailer->FromName = "Psicosys";
        #configura a mensagem como html
        $objMailer->IsHTML(true);
        #solucionar possíveis problemas de acentuação
        $objMailer->CharSet = 'UTF-8';

        #Configuração de texto e mensagem
        #assunto
        $objMailer->Subject  = $assunto;
        #mensagem
        $objMailer->Body = "Nome: ".$nome . "</br></br>" . "<br/>Email: " . $email . "<br/>Mensagem: <br/>". $mensagem;
        #mensagem como texto puro
        $objMailer->AltBody = trim(strip_tags($mensagem));
        #recebe a resposta se o email foi enviado com sucesso na forma de true/false
        $sucess = $objMailer->Send();
        #zera as variáveis
        $objMailer->ClearAllRecipients();
        $objMailer->ClearAttachments();


        #faz verificação se o email foi enviado com sucesso
        if ($sucess){
            //header("location:index.html"); creio que não será necessário realizar redirecionamento.
        } else {
            return false;
        }



    }


}

