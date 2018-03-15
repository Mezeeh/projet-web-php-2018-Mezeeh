<?php
	//print_r($_POST);
	if(!empty($_POST["action-ajouter-jeu"])){
		include_once "../accesseur/JeuDAO.php";
		$filtresJeu = array(
			'nom' => FILTER_SANITIZE_STRING,
			'editeur' => FILTER_SANITIZE_STRING,
			'description' => FILTER_SANITIZE_STRING,
			'date-publication' => FILTER_SANITIZE_STRING,
			'cash-prize-max' => FILTER_SANITIZE_STRING,
			'spectateurs-max' => FILTER_SANITIZE_NUMBER_INT,
			'dernier-tournoi' => FILTER_SANITIZE_STRING
		);
		$jeu = filter_var_array($_POST, $filtresJeu);
		$jeuDAO = new JeuDAO();
		$jeuDAO -> ajouterJeu($jeu);
	}
?>