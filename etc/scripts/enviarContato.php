<?php
/**
 * This example shows settings to use when sending via Google's Gmail servers.
 */

<<<<<<< HEAD
//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
date_default_timezone_set('Etc/UTC');

require '../plugin/PhpMailer/PHPMailerAutoload.php';

$mail = new PHPMailer();

// Define os dados do servidor e tipo de conexão
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->IsSMTP(); // Define que a mensagem será SMTP
$mail->Host = "mail.axiomteam.works"; // Endereço do servidor SMTP (caso queira utilizar a autenticação, utilize o host smtp.seudomínio.com.br)
$mail->SMTPAuth = true; // Usar autenticação SMTP (obrigatório para smtp.seudomínio.com.br)
$mail->Username = 'say@axiomteam.works'; // Usuário do servidor SMTP (endereço de email)
$mail->Password = '#@ax1omte@m'; // Senha do servidor SMTP (senha do email usado)

// Define o remetente
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->From = "say@axiomteam.works"; // Seu e-mail
$mail->Sender = "say@axiomteam.works"; // Seu e-mail
$mail->FromName = "Marco Teste"; // Seu nome

// Define os destinatário(s)
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->AddAddress('say@axiomteam.works', 'Teste Marco');
//$mail->AddAddress('e-mail@destino2.com.br');
//$mail->AddCC('ciclano@site.net', 'Ciclano'); // Copia
//$mail->AddBCC('fulano@dominio.com.br', 'Fulano da Silva'); // Cópia Oculta

// Define os dados técnicos da Mensagem
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->IsHTML(true); // Define que o e-mail será enviado como HTML
//$mail->CharSet = 'iso-8859-1'; // Charset da mensagem (opcional)

// Define a mensagem (Texto e Assunto)
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->Subject  = "Mensagem Teste"; // Assunto da mensagem
$mail->Body = 'Este é o corpo da mensagem de teste, em HTML!';
$mail->AltBody = 'Este é o corpo da mensagem de teste, em Texto Plano! \r\n';

// Define os anexos (opcional)
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
//$mail->AddAttachment("/home/login/documento.pdf", "novo_nome.pdf");  // Insere um anexo

// Envia o e-mail
$enviado = $mail->Send();

// Limpa os destinatários e os anexos
$mail->ClearAllRecipients();
$mail->ClearAttachments();

// Exibe uma mensagem de resultado
if ($enviado) {
    echo "E-mail enviado com sucesso!";
} else {
    echo "Não foi possível enviar o e-mail.

";
    echo "Informações do erro:
" . $mail->ErrorInfo;
=======
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
>>>>>>> de93bab439283f9df54e1d1a58d6622b7d32b961
}