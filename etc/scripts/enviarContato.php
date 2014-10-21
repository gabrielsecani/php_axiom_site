<?php
/**
 * This example shows settings to use when sending via Google's Gmail servers.
 */

if(isset($_POST)){

	$name = utf8_decode($_POST['name']);
	$subject = utf8_decode($_POST['subject']);
	$email = utf8_decode($_POST['email']);
	$body = utf8_decode($_POST['body']);
	if(empty($name) || empty($subject) || empty($email) || empty($body)) {
		echo "Todos os campos precisam ser preenchidos|1";
		die;
	}
	//SMTP needs accurate times, and the PHP time zone MUST be set
	//This should be done in your php.ini, but this is how to do it if you don't have access to that
	date_default_timezone_set('Etc/UTC');

	require '../plugin/PhpMailer/PHPMailerAutoload.php';
	//Create a new PHPMailer instance
	$mail = new PHPMailer;

	//Tell PHPMailer to use SMTP
	$mail->isSMTP();

	//Enable SMTP debugging
	// 0 = off (for production use)
	// 1 = client messages
	// 2 = client and server messages
	$mail->SMTPDebug = 0;

	//Ask for HTML-friendly debug output
	$mail->Debugoutput = 'html';

	//Set the hostname of the mail server
	$mail->Host = 'smtp.gmail.com';

	//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
	$mail->Port = 587;

	//Set the encryption system to use - ssl (deprecated) or tls
	$mail->SMTPSecure = 'tls';

	//Whether to use SMTP authentication
	$mail->SMTPAuth = true;

	//Username to use for SMTP authentication - use full email address for gmail
	$mail->Username = "lucaslg200@gmail.com";

	//Password to use for SMTP authentication
	$mail->Password = "hqcooccrnwmwoszf";

	//Set who the message is to be sent from
	$mail->setFrom('say@axiomteam.works', utf8_decode($_POST['name']));

	//Set who the message is to be sent to
	$mail->addAddress('say@axiomteam.works', 'John Doe');

	//Set the subject line
	$mail->Subject = 'Contato'. utf8_decode($_POST['subject']);

	//Read an HTML message body from an external file, convert referenced images to embedded,
	//convert HTML into a basic plain-text alternative body
	$mail->msgHTML(
		"<b>Nome:</b> ".utf8_decode($_POST['name'])."<br />".
		"<b>Email:</b> ".$_POST['email']."<br />".
		"<b>Assunto:</b> ".utf8_decode($_POST['subject'])."<br />".
		"<b>Mensagem:</b> ".utf8_decode($_POST['body'])."<br />"
		);

	//send the message, check for errors
	if (!$mail->send()) {
	   echo "Error " . $mail->ErrorInfo .  "|1";
	} else {
	    echo "Mensagem enviada com sucesso|2";
	}
	die;
}