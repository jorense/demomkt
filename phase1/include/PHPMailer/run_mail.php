<?php
	$mail_sent = TRUE;

	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	require 'src/Exception.php';
	require 'src/PHPMailer.php';
	require 'src/SMTP.php';

	$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
	try {
		//Server settings
		// $mail->SMTPDebug = 2;                                 // Enable verbose debug output
/*
		$mail->isSMTP();                                      // Set mailer to use SMTP
		$mail->Host = 'secure142.inmotionhosting.com';  // Specify main and backup SMTP servers
		$mail->SMTPAuth = true;                               // Enable SMTP authentication
		$mail->Username = 'noreply@josephmok.me';                 // SMTP username
		$mail->Password = 'aszxopkl';                           // SMTP password
		$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
		$mail->Port = 465;                                    // TCP port to connect to
*/
		$mail->isSMTP();                                      // Set mailer to use SMTP
		$mail->Host = $smtp_host;  // Specify main and backup SMTP servers
		$mail->SMTPAuth = true;                               // Enable SMTP authentication
		$mail->Username = $smtp_username;                 // SMTP username
		$mail->Password = $smtp_password;                           // SMTP password
		$mail->SMTPSecure = $smtp_secure;                            // Enable TLS encryption, `ssl` also accepted
		$mail->Port = $smtp_port;                                    // TCP port to connect to
		
		//Recipients
		$mail->setFrom($smtp_username, 'Web Systems'); // This needs to be the same as the username for PCCW servers to let the mail through
		$mail->addAddress($recipient_email, $recipient_name);     // Add a recipient
		// $mail->addAddress('ellen@example.com');               // Name is optional
		// $mail->addReplyTo('info@example.com', 'Information');
		// $mail->addCC('cc@example.com');
		// $mail->addBCC('bcc@example.com');

		//Attachments
		// $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
		// $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

		//Content
		$mail->isHTML(true);                                  // Set email format to HTML
		$mail->Subject = $subject;
		$mail->Body    = $message;
		// $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

		$mail->send();
		// echo 'Message has been sent';
	} 
	catch (Exception $e) {
		// echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
		$mail_sent = FALSE;
	}

?>