<?php
	//print_r($_POST);
	if(!empty($_POST["action-modifier-jeu"])){
		include_once "../accesseur/JeuDAO.php";
		$filtresJeu = array(
			'nom' => FILTER_SANITIZE_STRING,
			'editeur' => FILTER_SANITIZE_STRING,
			'description' => FILTER_SANITIZE_STRING,
			'date-publication' => FILTER_SANITIZE_STRING,
			'cash-prize-max' => FILTER_SANITIZE_STRING,
			'spectateurs-max' => FILTER_SANITIZE_NUMBER_INT,
			'dernier-tournoi' => FILTER_SANITIZE_STRING,
			'id' => FILTER_SANITIZE_NUMBER_INT
		);
		$jeu = filter_var_array($_POST, $filtresJeu);
		$jeuDAO = new JeuDAO();
		$jeuDAO -> modifierJeu($jeu);
	}
?>