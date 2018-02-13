<?php
	//print_r($_POST);
	if(!empty($_POST["action-supprimer-jeu"])){
		$idJeu = $_POST["id"];
		
		if(!empty($_POST["confirmation-oui"])){
			$SQL_EFFACER_JEU = "DELETE FROM jeu WHERE idJeu = " .$idJeu;
		
			include_once "base-de-donnees.php";
			
			//echo $SQL_EFFACER_JEU;
			
			$requeteEffacerJeu = $pdo->prepare($SQL_EFFACER_JEU);
			$requeteEffacerJeu->execute();
		}
	}
?>