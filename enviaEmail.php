<?php
/**
 * Created by PhpStorm.
 * User: israel
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
    $user = 'ihudtestes@gmail.com';
    $senha = '87257847';
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
            <img src='http://ihudtecnologia.com/SamrtCity-5.0/img/lg2.png' alt=''>
            <body>
            <h3>Obrigado pela mensagem $nome_cliente,</h3>
            <p>Sua mensagem foi recebida. </p> 
            Telefone: $telefone_cliente <br> 
            Assunto: $assunto_cliente <br>
            Menssagem: $mensagem_cliente <br><br>
            
            Att, Smart City Luna.
            </body>
        </html>
    ");
    $mail->AltBody = 'Mensagem de boas-vindas';

    if (!$mail->send()) {
        echo "<script>
                alert('Erro ao enviar a mensagem. Desculpe');
                javascript:history.back();
                
  window.scrollTo(0, 0);
            </script>";
        die("Erro no envio da mensagem: {$mail->ErrorInfo}");
    }else{
        //echo 'Mensagem enviada com sucesso!';
        echo "<script>
                alert('Mensagem enviada com sucesso. Obrigado!');
                javascript:history.back();
                
  window.scrollTo(0, 0);
            </script>";
    }

}