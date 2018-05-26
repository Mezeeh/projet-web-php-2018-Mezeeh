<?php
	//print_r($_POST);
	$infos = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
	//print_r($infos);
	
	require '../lib/phpmailer/PHPMailerAutoload.php';
	$message = new PHPMailer;

	$message->setFrom($infos['courriel'], $infos['prenom'] . ' ' . $infos['nom']);
	$message->addAddress('mezeeh@hotmail.com');
	$message->addAddress($infos['courriel']);               
	//$message->addReplyTo('info@ici.com', 'Information');
	$message->Subject = $infos['sujet'];
	$message->Body = $infos['message'];

	echo $message->send() ? 'Message envoyé' : 'Erreur de messagerie: ' . $message->ErrorInfo;
?>