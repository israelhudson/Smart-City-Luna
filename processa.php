<?php
 
 
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$assunto = $_POST['assunto'];
$msg = $_POST['mensagem'];
 
 
$headers = "From: ". $nome;
 
$corpoemail = '<b>Fale Conosco - Fabricando a Web</b>
             
               Nome: '   .$nome.' /n
               Email:'   .$email.'/n
               Telefone:'   .$telefone.'/n
               Assunto:' .$assunto.' /n
               Mensagem:'.$msg.' /n';
 
 
 
 
if(mail("soestudo2017@gmail.com", "Fale Conosco",$corpoemail,$headers)){
 
 
       echo "<script>alert('Mensagem enviada com sucesso!');</script>"; 
       header("Location: index.php");
 
} else{
 
      echo "<script>alert('Erro ao enviar, tente diretamente pelo email soestudo2017@gmail.com');</script>";  
 
}