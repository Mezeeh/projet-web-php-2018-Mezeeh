<?php
	//print_r($_POST);
	$infos = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
	//print_r($infos);
	
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	require '../lib/phpmailer/src/Exception.php';
	require '../lib/phpmailer/src/PHPMailer.php';
	
	$message = new PHPMailer();

	$message->setFrom($infos['courriel']);
	$message->addAddress('micturcotte97@gmail.com');
	$message->addAddress($infos['courriel']);               
	//$message->addReplyTo('info@ici.com', 'Information');
	$message->Subject = $infos['sujet'];
	$message->Body = $infos['message'];

	//print_r($message);
	if(!$message->send()) 
		echo 'Erreur de messagerie: ' . $message->ErrorInfo;
	else
		echo 'Message envoyé';
?>