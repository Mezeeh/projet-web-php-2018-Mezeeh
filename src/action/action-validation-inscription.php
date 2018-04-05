<?php 
session_start();

// Traitement de inscription-informations.php
$filtreMembre = array(
    'genre' => FILTER_SANITIZE_ENCODED,
    'courriel' => FILTER_SANITIZE_ENCODED,
);
$informations = filter_var_array($_POST, $filtreMembre);

$_SESSION['membre']['genre'] = ($informations['genre'] == 'homme') ? 1 : 0;
$_SESSION['membre']['courriel'] = $informations['courriel'];

//print_r($_SESSION['membre']);

include_once "../accesseur/MembreDAO.php";
$membreDAO = new MembreDAO();
$membreDAO->ajouterMembre($_SESSION['membre']);
?>