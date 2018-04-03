<?php
	session_start();
	include "base-de-donnees.php";
	//print_r($_POST);
	
	$filtreAdmin = array();
	$filtreAdmin['pseudonyme'] = FILTER_SANITIZE_STRING;
	$filtreAdmin['motdepasse'] = FILTER_SANITIZE_STRING;
	$admin = filter_input_array(INPUT_POST, $filtreAdmin);
	//print_r($admin);
	
	include_once "../../accesseur/AdminDAO.php";
	$adminDAO = new AdminDAO();
	$adminTrouve = $adminDAO->trouverAdmin($admin);
	
	if(strcmp($admin["motdepasse"],$adminTrouve["motdepasse"]) == 0){	
		echo "Authentification reussie";
		$_SESSION['admin'] = array();
		$_SESSION['admin']['pseudonyme'] = $adminTrouve['pseudonyme'];
		//var_dump($_SESSION);	
	}	
	else{
		echo "Problème d'authentification";
	}
?>

<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>

</body>
</html>
