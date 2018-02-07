<?php
	//print_r($_POST);
	
	$nom = $_POST["nom"];
	$type = $_POST["type"];
	$generation = $_POST["generation"];
	$resume = $_POST["resume"];
	$id = $_POST["id"];
	
	$SQL_MODIFIER_JEU = "UPDATE pokemon SET nom = '".$nom."', type = '".$type."', generation = '".$generation."', resume = '".$resume."' WHERE idPokemon = " .$id;
	
	include_once "base-de-donnees.php";
	
	$requeteModifierJeu = $pdo->prepare($SQL_MODIFIER_JEU);
    $requeteModifierJeu->execute();
?>