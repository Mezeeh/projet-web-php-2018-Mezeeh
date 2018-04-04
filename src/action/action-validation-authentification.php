<?php 
session_start();

// Traitement de inscription-informations.php
$filtreMembre = array(
    'homme' => FILTER_SANITIZE_ENCODED,
    'femme' => FILTER_SANITIZE_ENCODED,
    'courriel' => FILTER_SANITIZE_ENCODED,
);

$_SESSION['membre'] = filter_var_array($_POST, $filtreMembre);

/* include_once "MembreDAO.php";
$membreDAO = new MembreDAO();
$membreDAO->ajouterMembre($_SESSION['membre']);
 */
print_r($_SESSION);
?>