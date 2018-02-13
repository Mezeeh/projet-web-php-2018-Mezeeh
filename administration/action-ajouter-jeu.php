<?php
	//print_r($_POST);
	if(!empty($_POST["action-ajouter-jeu"])){
		include_once "../accesseur/JeuDAO.php";
		$jeu = $_POST;
		$jeuDAO = new JeuDAO();
		$jeuDAO -> ajouterJeu($jeu);
	}
?>