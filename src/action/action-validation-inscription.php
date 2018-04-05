<?php 
    session_start();

    if(!empty($_POST['action-inscription-identification'])){
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

        if(!empty($_SESSION['membre']['prenom']) && !empty($_SESSION['membre']['nom']) && !empty($_SESSION['membre']['pseudonyme']) &&
        !empty($_SESSION['membre']['motdepasse']) && ($_SESSION['membre']['genre'] == 0 || $_SESSION['membre']['genre'] == 1) && !empty($_SESSION['membre']['courriel']))
            header('Location: ../index.php');
        else
            header('Location: ../inscription-identification.php');
    }
?>