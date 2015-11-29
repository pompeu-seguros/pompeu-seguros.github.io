<?php
// check if fields passed are empty
if(empty($_POST['name'])  		||
   empty($_POST['phone']) 		||
   empty($_POST['email']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$name = $_POST['name'];
$phone = $_POST['phone'];
$email_address = $_POST['email'];
$message = $_POST['message'];
	
// create email body and send it	
$to = 'pompeu.seguros@mail.telepac.pt'; // PUT YOUR EMAIL ADDRESS HERE
$email_subject = "Modern Business Contact Form:  $name"; // EDIT THE EMAIL SUBJECT LINE HERE
$email_body = "Recebeu uma nova mensagem do formulário do site da empresa.\n\n"."Aqui estão os detalhes:\n\nNome: $name\n\nTelefone: $phone\n\nEmail: $email_address\n\nMensagem:\n$message";
$headers = "From: noreply@pompeuepompeu.pt\n";
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
return true;			
?>