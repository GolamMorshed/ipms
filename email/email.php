<?php
function html_email($to,$subject,$txt){
	require_once 'PHPMailer/src/Exception.php';
	require_once 'PHPMailer/src/PHPMailer.php';
	require_once 'PHPMailer/src/SMTP.php';
	ini_set('SMTP','mail.karunasystems.a2hosted.com');
	ini_set('smtp_port', 465);
	$mail = new PHPMailer();
	//Tell PHPMailer to use SMTP
	$mail->isSMTP();
	//Enable SMTP debugging
	// SMTP::DEBUG_OFF = off (for production use)
	// SMTP::DEBUG_CLIENT = client messages
	// SMTP::DEBUG_SERVER = client and server messages
	$mail->SMTPAuth = true;
	$mail->SMTPDebug = 1;
	$mail->SMTPKeepAlive = true;
	$mail->SMTPSecure = 'ssl'; 
	$mail->Host = 'mail.karunasystems.a2hosted.com';
	$mail->Port = 465;
	$mail->Username = 'pjxnoreply@karunasystems.a2hosted.com';
	$mail->Password = 'noreplypjx';
	$mail->setFrom('pjxnoreply@karunasystems.a2hosted.com');
	$mail->Subject = $subject;
	$mail->msgHTML($txt);
	$mail->AddCC('pjxnoreply@karunasystems.a2hosted.com');

	if(is_array($to))
	{
		foreach($to as $email)
		{
			$mail->addAddress($email);
		}
	} else {
		$mail->addAddress($to);
	}
	
	$mail->send();
	
	// if (!$mail->send()) {
		// $headers = "MIME-Version: 1.0" . "\r\n";
		// $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		// $headers .= "From: pjx.noreply@gmail.com" . "\r\n" .
		// "CC: pjx.noreply@gmail.com";
		
		// mail($to,$subject,$txt,$headers);p
	// }

	$mail->clearAddresses();
}

function plain_email($to,$subject,$txt){
	$headers = "From: pjx.noreply@gmail.com" . "\r\n" .
	"CC: pjx.noreply@gmail.com";

	mail($to,$subject,$txt,$headers);
}
?>