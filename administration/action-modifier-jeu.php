<?php
	//print_r($_POST);
	if(!empty($_POST["action-modifier-jeu"])){
		include_once "../accesseur/JeuDAO.php";
		$jeu = $_POST;
		$jeuDAO = new JeuDAO();
		$jeuDAO -> modifierJeu($jeu);
	}
?>