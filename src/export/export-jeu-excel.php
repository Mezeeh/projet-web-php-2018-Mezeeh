<?php
	//print_r($_GET);
	$idJeu = filter_var($_GET['jeu'], FILTER_VALIDATE_INT);
	require('../accesseur/JeuDAO.php');
	$jeuDAO = new JeuDAO();
	$jeu = $jeuDAO->lireJeu($idJeu);
	//print_r($jeu);
	include "../lib/phpexcel/PHPExcel.php";
	$document = new PHPExcel();
	$document->getActiveSheet()->setCellValue('A1', 'Jeu');
	$document->getActiveSheet()->setCellValue('A2', utf8_decode($jeu['nom']));
	$document->getActiveSheet()->setCellValue('B1', 'Editeur');
	$document->getActiveSheet()->setCellValue('B2', utf8_decode($jeu['editeur']));
	$document->getActiveSheet()->setCellValue('C1', 'Description');
	$document->getActiveSheet()->setCellValue('C2', utf8_decode($jeu['description']));
	$document->getActiveSheet()->setCellValue('D1', 'Annee de publication');
	$document->getActiveSheet()->setCellValue('D2', utf8_decode($jeu['anneePublication']));
	$document->getActiveSheet()->setCellValue('E1', 'Plus gros cash prize');
	$document->getActiveSheet()->setCellValue('E2', utf8_decode(number_format($jeu["cashPrizeMax"], 2, ',', ' ')) . " $");
	$document->getActiveSheet()->setCellValue('F1', 'Record de spectateurs smimultanes');
	$document->getActiveSheet()->setCellValue('F2', utf8_decode($jeu["spectateursMax"]));
	$document->getActiveSheet()->setCellValue('G1', 'Dernier tournoi');
	$document->getActiveSheet()->setCellValue('G2', utf8_decode($jeu['dernierTournoi']));
	$ecrivain = PHPExcel_IOFactory::createWriter($document, "Excel2007");
	
	if (preg_match('/[\'\s^£$%&*()}{@#~?><>,|=_+¬-]/', $jeu['nom'])){
		$jeu['nom'] = preg_replace('/[^a-zA-Z0-9_ -]/s', '', $jeu['nom']);
		$jeu['nom'] = preg_replace('/\s+/', '-', $jeu['nom']);
	}
	$ecrivain->save($jeu['nom'] . ".xlsx");
	
	if(file_exists($jeu['nom'] . ".xlsx")){
		//print_r($jeu['nom']);
		echo '<a href=' . $jeu['nom'] . '.xlsx>T&eacute;l&eacute;charger le fichier Excel</a>';		
		
	}
?>