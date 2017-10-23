<?php
/**
 * Created by PhpStorm.
 * User: israe
 * Date: 23/10/2017
 * Time: 01:03
 */
require('mail/phpmailer/PHPMailerAutoload.php');

$nome_cliente = $_POST["nome"];
$telefone_cliente = $_POST["telefone"];
$email_cliente = $_POST["email"];
$assunto_cliente = $_POST["assunto"];
$mensagem_cliente = $_POST["mensagem"];

enviarEmail($nome_cliente, $telefone_cliente, $email_cliente, $assunto_cliente, $mensagem_cliente);//Enviar email

function enviarEmail($nome_cliente, $telefone_cliente, $email_cliente, $assunto_cliente, $mensagem_cliente){

    $mail = new PHPMailer();
    $mail->setLanguage('pt_br');

    $host = 'smtp.gmail.com';
    $user = 'contatomoteldragon@gmail.com';
    $senha = 'j1cpm9r9gvo9';
    $mail->isSMTP();
    $mail->Host = $host;
    $mail->Port = 587;
    $mail->SMTPSecure = 'tls';
    $mail->SMTPAuth = true;
    $mail->Username = $user;
    $mail->Password = $senha;
    $mail->setFrom($user, 'Smart City Luna');//Enviado por...
    $mail->addReplyTo('israelhudson@gmail.com', 'Smart City Luna');//E-mail de resposta

    $mail->addAddress($email_cliente, $nome_cliente); //Envio do email para o cliente
    $mail->addBCC('israelhudson@gmail.com', 'Israel'); //copia oculta
    //$mail->SMTPDebug = 1;
    $mail->Subject = 'Envio de email';
    $mail->CharSet = 'UTF-8';
    $mail->msgHTML("
        <html>
            <body>
                
            </body>
        </html>
    ");
    $mail->AltBody = 'Mensagem de boas-vindas';

    if (!$mail->send()) {
        $confirmaEnvio = false;
        die("Erro no envio do e-mail: {$mail->ErrorInfo}");
    }else{
        $confirmaEnvio = true;
        echo 'Cupom gerado com Sucesso';
    }

}