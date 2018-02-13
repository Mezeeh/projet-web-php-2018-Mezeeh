<?php
	//print_r($_POST);
	if(!empty($_POST["action-modifier-jeu"])){
		$nom = $_POST["nom"];
		$editeur = $_POST["editeur"];
		$description = $_POST["description"];
		$anneePublication = $_POST["date-publication"];
		$cashPrizeMax = $_POST["cash-prize-max"];
		$spectateursMax = $_POST["spectateurs-max"];
		$dernierTournoi = $_POST["dernier-tournoi"];
		$idJeu = $_POST["id"];
		
		$SQL_MODIFIER_JEU = "UPDATE jeu SET nom = '".$nom."', editeur = '".$editeur."', description = '".$description."', 
		anneePublication = '".$anneePublication."', cashPrizeMax = '".$cashPrizeMax."', spectateursMax = '".$spectateursMax."', 
		dernierTournoi = '".$dernierTournoi."' WHERE idJeu = " .$idJeu;
		
		//echo $SQL_MODIFIER_JEU;
		
		include_once "base-de-donnees.php";
		
		$requeteModifierJeu = $pdo->prepare($SQL_MODIFIER_JEU);
		$requeteModifierJeu->execute();
	}
?>