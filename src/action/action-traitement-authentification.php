<?php
	session_start();
	include "../accesseur/base-de-donnees.php";
	//print_r($_POST);
	
	$filtreMembre = array();
	$filtreMembre['pseudonyme'] = FILTER_SANITIZE_STRING;
	$filtreMembre['motdepasse'] = FILTER_SANITIZE_STRING;
	$membre = filter_input_array(INPUT_POST, $filtreMembre);
	//print_r($admin);
	
	include_once "../accesseur/MembreDAO.php";
	$membreDAO = new MembreDAO();
	$membreTrouve = $membreDAO->trouverAdmin($membre);
	
	if(strcmp($membre["motdepasse"],$membreTrouve["motdepasse"]) == 0){	
		echo "Authentification reussie";
		$_SESSION['membre'] = array();
		$_SESSION['membre']['id'] = $membreTrouve['id'];
		$_SESSION['membre']['prenom'] = $membreTrouve['prenom'];
		$_SESSION['membre']['nom'] = $membreTrouve['nom'];
		$_SESSION['membre']['pseudonyme'] = $membreTrouve['pseudonyme'];
		$_SESSION['membre']['motdepasse'] = $membreTrouve['motdepasse'];
		$_SESSION['membre']['courriel'] = $membreTrouve['courriel'];
		$_SESSION['membre']['admin'] = $membreTrouve['admin'];
		$_SESSION['membre']['genre'] = $membreTrouve['genre'];
		//var_dump($_SESSION);	
	}	
	else{
		echo "Problème d'authentification";
	}
?>
