<?php 
//print_r($_GET);
$idJeu = filter_var($_GET['jeu'], FILTER_VALIDATE_INT);
require('../accesseur/JeuDAO.php');
$jeuDAO = new JeuDAO();
$jeu = $jeuDAO->lireJeu($idJeu);
//print_r($jeu);
require('../lib/fpdf/fpdf.php');
$document = new FPDF();
$document->AddPage();
$document->SetFont('Arial','B',16);
$document->Write(10, 'Jeu ' . $jeu['nom']);
$document->Ln();
$document->Ln();
$document->Write(10, 'Éditeur: ' . utf8_decode($jeu['editeur']));
$document->Ln();
$document->Write(10, 'Description: ' . utf8_decode($jeu['description']));
$document->Ln();
$document->Write(10, 'Année de publication: ' . utf8_decode($jeu['anneePublication']));
$document->Ln();
$document->Write(10, 'Plus gros cash prize: ' . utf8_decode(number_format($jeu["cashPrizeMax"], 2, ',', ' '))) . " $";
$document->Ln();
$document->Write(10, 'Record de spacteurs simultanés: ' . utf8_decode($jeu["spectateursMax"]));
$document->Ln();
$document->Write(10, 'Dernier tournoi: ' . utf8_decode($jeu['dernierTournoi']));
$document->Ln();
 
$document->Output();
?>