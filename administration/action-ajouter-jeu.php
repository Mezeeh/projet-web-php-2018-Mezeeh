<?php
	//print_r($_POST);
	
	$nom = $_POST["nom"];
	$editeur = $_POST["editeur"];
	$description = $_POST["description"];
	$anneePublication = $_POST["date-publication"];
	$cashPrizeMax = $_POST["cash-prize-max"];
	$spectateursMax = $_POST["spectateurs-max"];
	$dernierTournoi = $_POST["dernier-tournoi"];

	$SQL_AJOUTER_JEU = "INSERT into jeu(nom, editeur, description, anneePublication, cashPrizeMax, spectateursMax, dernierTournoi) 
	VALUES('".$nom."', '".$editeur."', '".$description."', '".$anneePublication."', '".$cashPrizeMax."', '".$spectateursMax."', '".$dernierTournoi."')";
	
	//echo $SQL_AJOUTER_JEU;
	
	include_once "base-de-donnees.php";
	
	$requeteAjouterJeu = $pdo->prepare($SQL_AJOUTER_JEU);
    $requeteAjouterJeu->execute();
?>