<?php
require('mail/phpmailer/PHPMailerAutoload.php');

error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);

// $nome_user = $_POST["first_name"];
// $email_user = $_POST["email"];



function enviarEmailDragon($nome_cliente, $email_cliente,$cpf_cliente, $cupom,$empresa){

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
    $mail->setFrom($user, 'Dragon Motel');//Enviado por...
    $mail->addReplyTo('Dragon_motel@hotmail.com', $empresa);//E-mail de resposta

	$mail->addAddress($email_cliente, $nome_cliente);
    $mail->addBCC('israelhudson@gmail.com', 'Israel Teste Motel'); //copia oculta
	$mail->addBCC('Dragon_motel@hotmail.com', $empresa); //copia oculta
	$mail->addBCC('J.carvalho7@hotmail.com', 'Gerência Moteis'); //copia oculta
	$mail->addBCC('Leozinha.pessoalmoteisfortaleza@outlook.com', 'Pessoal Moteis'); //copia oculta
    //$mail->SMTPDebug = 1;
    $mail->Subject = 'Envio de email';
    $mail->CharSet = 'UTF-8';
    $mail->msgHTML("
	<html>
		<body>
			<p>Olá $nome_cliente, Segue abaixo o seu cupom.</p>
			<h1>$cupom</h1><br>
			Seus dados:<br><br>
			Nome: $nome_cliente <br>
			CPF: $cpf_cliente <br>
			Email: $email_cliente<br>
			<p>Att, $empresa.</p>
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
function enviarEmailMC($nome_cliente, $email_cliente,$cpf_cliente, $cupom,$empresa){
  $mail = new PHPMailer();
  $mail->setLanguage('pt_br');

  $host = 'smtp.gmail.com';
	$user = 'contatomcmotel@gmail.com';
	$senha = 'j1cpm9r9gvo9';
    $mail->isSMTP();
    $mail->Host = $host;
    $mail->Port = 587;
    $mail->SMTPSecure = 'tls';
    $mail->SMTPAuth = true;
    $mail->Username = $user;
    $mail->Password = $senha;
    $mail->setFrom($user, $empresa);//Enviado por...
    $mail->addReplyTo('mcmotel@hotmail.com', $empresa);//E-mail de resposta

	$mail->addAddress($email_cliente, $nome_cliente);
    $mail->addBCC('israelhudson@gmail.com', 'Israel Teste Motel'); //copia oculta
	$mail->addBCC('mcmotel@hotmail.com', $empresa); //copia oculta
	$mail->addBCC('J.carvalho7@hotmail.com', 'Gerência Moteis'); //copia oculta
	$mail->addBCC('Leozinha.pessoalmoteisfortaleza@outlook.com', 'Pessoal Moteis'); //copia oculta
  //   //$mail->SMTPDebug = 1;
    $mail->Subject = 'Envio de email';
    $mail->CharSet = 'UTF-8';
    $mail->AltBody = 'Olá $nome_cliente, seu cupom: $cupom';
    $mail->msgHTML("
	<html>
		<body>
			<p>Olá $nome_cliente, Segue abaixo o seu cupom.</p>
			<h1>$cupom</h1><br>
			Seus dados:<br><br>
			Nome: $nome_cliente <br>
			CPF: $cpf_cliente <br>
			Email: $email_cliente<br>
			<p>Att, $empresa.</p>
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

function enviarEmailAssahi($nome_cliente, $email_cliente,$cpf_cliente, $cupom,$empresa){
  $mail = new PHPMailer();
  $mail->setLanguage('pt_br');

  $host = 'smtp.gmail.com';
	$user = 'contatoassahimotel@gmail.com';
	$senha = 'j1cpm9r9gvo9';
    $mail->isSMTP();
    $mail->Host = $host;
    $mail->Port = 587;
    $mail->SMTPSecure = 'tls';
    $mail->SMTPAuth = true;
    $mail->Username = $user;
    $mail->Password = $senha;
    $mail->setFrom($user, $empresa);//Enviado por...
    $mail->addReplyTo('Assahimotel@hotmail.com', $empresa);//E-mail de resposta

	$mail->addAddress($email_cliente, $nome_cliente);
    $mail->addBCC('israelhudson@gmail.com', 'Israel Teste Motel'); //copia oculta
	$mail->addBCC('Assahimotel@hotmail.com', $empresa); //copia oculta
	$mail->addBCC('J.carvalho7@hotmail.com', 'Gerência Moteis'); //copia oculta
	$mail->addBCC('Leozinha.pessoalmoteisfortaleza@outlook.com', 'Pessoal Moteis'); //copia oculta
  //   //$mail->SMTPDebug = 1;
    $mail->Subject = 'Envio de email';
    $mail->CharSet = 'UTF-8';
    $mail->AltBody = 'Olá $nome_cliente, seu cupom: $cupom';
    $mail->msgHTML("
	<html>
		<body>
			<p>Olá $nome_cliente, Segue abaixo o seu cupom.</p>
			<h1>$cupom</h1><br>
			Seus dados:<br><br>
			Nome: $nome_cliente <br>
			CPF: $cpf_cliente <br>
			Email: $email_cliente<br>
			<p>Att, $empresa.</p>
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

function enviarEmailDreams($nome_cliente, $email_cliente,$cpf_cliente, $cupom,$empresa){
  $mail = new PHPMailer();
  $mail->setLanguage('pt_br');

  $host = 'smtp.gmail.com';
	$user = 'contatodreamsmotel@gmail.com';
	$senha = 'j1cpm9r9gvo9';
    $mail->isSMTP();
    $mail->Host = $host;
    $mail->Port = 587;
    $mail->SMTPSecure = 'tls';
    $mail->SMTPAuth = true;
    $mail->Username = $user;
    $mail->Password = $senha;
    $mail->setFrom($user, $empresa);//Enviado por...
    $mail->addReplyTo('dreamssmotel@hotmail.com', $empresa);//E-mail de resposta

	$mail->addAddress($email_cliente, $nome_cliente);
    $mail->addBCC('israelhudson@gmail.com', 'Israel Teste Motel'); //copia oculta
	$mail->addBCC('dreamssmotel@hotmail.com', $empresa); //copia oculta
	$mail->addBCC('J.carvalho7@hotmail.com', 'Gerência Moteis'); //copia oculta
	$mail->addBCC('Leozinha.pessoalmoteisfortaleza@outlook.com', 'Pessoal Moteis'); //copia oculta
  //   //$mail->SMTPDebug = 1;
    $mail->Subject = 'Envio de email';
    $mail->CharSet = 'UTF-8';
    $mail->AltBody = 'Olá $nome_cliente, seu cupom: $cupom';
    $mail->msgHTML("
	<html>
		<body>
			<p>Olá $nome_cliente, Segue abaixo o seu cupom.</p>
			<h1>$cupom</h1><br>
			Seus dados:<br><br>
			Nome: $nome_cliente <br>
			CPF: $cpf_cliente <br>
			Email: $email_cliente<br>
			<p>Att, $empresa.</p>
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

function enviarEmailHipnose($nome_cliente, $email_cliente,$cpf_cliente, $cupom,$empresa){
  $mail = new PHPMailer();
  $mail->setLanguage('pt_br');

  $host = 'smtp.gmail.com';
	$user = 'contatomotelhipnose@gmail.com';
	$senha = 'j1cpm9r9gvo9';
    $mail->isSMTP();
    $mail->Host = $host;
    $mail->Port = 587;
    $mail->SMTPSecure = 'tls';
    $mail->SMTPAuth = true;
    $mail->Username = $user;
    $mail->Password = $senha;
    $mail->setFrom($user, $empresa);//Enviado por...
    $mail->addReplyTo('Hipnosemotel@outlook.com', $empresa);//E-mail de resposta

	$mail->addAddress($email_cliente, $nome_cliente);
    $mail->addBCC('israelhudson@gmail.com', 'Israel Teste Motel'); //copia oculta
	$mail->addBCC('Hipnosemotel@outlook.com', $empresa); //copia oculta
	$mail->addBCC('J.carvalho7@hotmail.com', 'Gerência Moteis'); //copia oculta
	$mail->addBCC('Leozinha.pessoalmoteisfortaleza@outlook.com', 'Pessoal Moteis'); //copia oculta
    //$mail->SMTPDebug = 1;
    $mail->Subject = 'Envio de email';
    $mail->CharSet = 'UTF-8';
    $mail->msgHTML("
	<html>
		<body>
			<p>Olá $nome_cliente, Segue abaixo o seu cupom.</p>
			<h1>$cupom</h1><br>
			Seus dados:<br><br>
			Nome: $nome_cliente <br>
			CPF: $cpf_cliente <br>
			Email: $email_cliente<br>
			<p>Att, $empresa.</p>
		</body>
	</html>
");
    $mail->AltBody = 'Olá $nome_cliente, seu cupom: $cupom';

    if (!$mail->send()) {
		$confirmaEnvio = false;
        die("Erro no envio do e-mail: {$mail->ErrorInfo}");
    }else{
		$confirmaEnvio = true;
		echo 'Cupom gerado com Sucesso';
	}


}

function enviarEmail($nome_user, $email_user, $cupom_user,$empresa){

  $mail = new PHPMailer();
  		$mail->setLanguage('pt_br');

  		$host = 'smtp.ihudtecnologia.com';
  		$username = 'contatomoteisfortaleza@ihudtecnologia.com';
  		$password = '!M@cl!3nt3';
  		$port = '587';
  		//$secure = false;

  		$from = $username;
  		$fromname = 'VOUCHER MOTEIS FORTALEZA';

  		  $mail->isSMTP();
  		  $mail->Host = $host;
  		  $mail->SMTPAuth = true;
  		  $mail->Username = $username;
  		  $mail->Password = $password;
  		  $mail->Port = $port;
  		  //$mail->SMTPSecure = $secure;

  		  $mail->From = $from;
  		  $mail->FromName = $fromName;
  		 	//$mail->addReplyTo('Assahimotel@hotmail.com', 'Assahi Motel'); //Email de resposta

  		  //$mail->addAddress($email_user, $nome_user);

  			$mail->addBCC('israelhudson@gmail.com', 'Israel Teste Motel'); //copia oculta

  		  $mail->addBCC('Assahimotel@hotmail.com', 'Assahi Motel'); //copia oculta
  			$mail->addBCC('J.carvalho7@hotmail.com', 'Gerência Moteis'); //copia oculta
  			$mail->addBCC('Leozinha.pessoalmoteisfortaleza@outlook.com', 'Pessoal Moteis'); //copia oculta


  		  $mail->isHTML(true);
  		  $mail->CharSet = 'utf-8';
  		  $mail->WordWrap = 70;

  		  $mail->Subject = 'Seu Cupom';
  		  $mail->Body = "
  			<html>
  			<body>
  			<p>Olá $nome_user, Segue abaixo o seu cupom.</p>
  			<h1>$cupom_user</h1>
  			<p>Att, $empresa.</p>
        </body>
        </html>

  			";

  		  $send = $mail->Send();

  		  if($send){
  			  //return true;
  			  echo "sucesso";
  		  }else{
  			  echo "error: ".$mail->ErrorInfo;
  			  //return $mail;
  			  // echo 'Erro: '.$mail->ErrorInfo;
  		  }

  			//Fim do envio de email

}

 ?>
