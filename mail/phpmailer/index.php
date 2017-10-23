<?php 
 //require_once('phpmailer/class.phpmailer.php');
  require('../phpmailer/PHPMailerAutoload.php');
  
  $mail = new PHPMailer();
  $mail->setLanguage('pt_br');
  
  $host = 'smtp.valemaisauto.com.br';
  $username = 'israelhudson@valemaisauto.com.br';
  $password = '87257847';
  $port = '587';
  //$secure = false;
  
  $from = $username;
  $fromname = 'ISRAEL VMA';
  
  
  
  $mail->isSMTP();
  $mail->Host = $host;
  $mail->SMTPAuth = true;
  $mail->Username = $username;
  $mail->Password = $password;
  $mail->Port = $port;
  //$mail->SMTPSecure = $secure;
  
  $mail->From = $from;
  $mail->FromName = $fromName;
  $mail->addReplyTo($from, $fromName);
  
  $mail->addAddress('israelhudson@gmail.com', 'Israel Hudson');
  
  
  $mail->isHTML(true);
  $mail->CharSet = 'utf-8';
  $mail->WordWrap = 70;
  
  $mail->Subject = 'Enviando E-mails com PHPMailer';
  $mail->Body = 'Enviando E-mails com <b>PHPMailer</b> na aula do <h2>YouTube</h2>';
  $mail->AltBody = 'Enviando E-mails com PHPMailer na aula do YouTube';
  
  $send = $mail->Send();
  
  if($send){
	  echo 'E-mail Enviando com sucesso.';
  }else{
	  echo 'Erro: '.$mail->ErrorInfo;
  
  }
  
  //Teste se funciona com mais de um email.
  
  $mail2 = new PHPMailer();
  $mail2->setLanguage('pt_br');
  
  $host = 'smtp.valemaisauto.com.br';
  $username = 'israelhudson@valemaisauto.com.br';
  $password = '87257847';
  $port = '587';
  //$secure = false;
  
  $from = $username;
  $fromname = 'ISRAEL VMA';
  
  
  
  $mail2->isSMTP();
  $mail2->Host = $host;
  $mail2->SMTPAuth = true;
  $mail2->Username = $username;
  $mail2->Password = $password;
  $mail2->Port = $port;
  //$mail2->SMTPSecure = $secure;
  
  $mail2->From = $from;
  $mail2->FromName = $fromName;
  $mail2->addReplyTo($from, $fromName);
  
  $mail2->addAddress('israelhudson@gmail.com', 'Israel Hudson');
  
  
  $mail2->isHTML(true);
  $mail2->CharSet = 'utf-8';
  $mail2->WordWrap = 70;
  
  $mail2->Subject = 'Enviando Olá usuário';
  $mail2->Body = 'Enviando E-mails com <b>PHPMailer</b> na aula do <h2>YouTube</h2>';
  $mail2->AltBody = 'Enviando E-mails com PHPMailer na aula do YouTube';
  
  $send = $mail2->Send();
  
  if($send)
	  echo 'E-mail Enviando com sucesso.';
  else
	  echo 'Erro: '.$mail->ErrorInfo;
  
  