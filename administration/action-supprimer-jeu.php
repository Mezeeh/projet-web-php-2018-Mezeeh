<?php
	//print_r($_POST);
	if(!empty($_POST["action-supprimer-jeu"])){
		
		if(!empty($_POST["confirmation-oui"])){
			include_once "../accesseur/JeuDAO.php";
			$jeuDAO = new JeuDAO();
			$jeuDAO -> supprimerJeu($_POST["id"]);
		}
	}
?>