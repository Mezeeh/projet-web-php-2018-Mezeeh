<?php
	session_start();
	include "base-de-donnees.php";
	//print_r($_POST);
	
	$filtreAdmin = array();
	$filtreAdmin['pseudonyme'] = FILTER_SANITIZE_STRING;
	$filtreAdmin['motdepasse'] = FILTER_SANITIZE_STRING;
	$admin = filter_input_array(INPUT_POST, $filtreAdmin);
	//print_r($admin);
	
	$SQL_TROUVER_ADMIN = "SELECT * FROM admin WHERE pseudonyme = '" . $admin['pseudonyme'] . "'";
	$requeteTrouverAdmin = $pdo->prepare($SQL_TROUVER_ADMIN);
	$requeteTrouverAdmin->execute();
	$adminTrouve = $requeteTrouverAdmin->fetch();
	//print_r($adminTrouve);
	
	if(strcmp($admin["motdepasse"],$adminTrouve["motdepasse"]) == 0){	
		//echo "Authentification reussie";
		$_SESSION['admin'] = array();
		$_SESSION['admin']['pseudonyme'] = $adminTrouve['pseudonyme'];
		var_dump($_SESSION);	
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
