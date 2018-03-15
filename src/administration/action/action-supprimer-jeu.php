<?php
	//print_r($_POST);
	if(!empty($_POST["action-supprimer-jeu"])){
		
		if(!empty($_POST["confirmation-oui"])){
			$idJeu = filter_var($_POST["id"], FILTER_SANITIZE_NUMBER_INT);
			include_once "../../accesseur/JeuDAO.php";
			$jeuDAO = new JeuDAO();
			$jeuDAO -> supprimerJeu($idJeu);
		}
	}
?>