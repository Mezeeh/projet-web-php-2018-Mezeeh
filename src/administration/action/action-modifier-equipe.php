<?php
if(!empty($_POST['action-modifier-equipe']))
{
    include_once "action-traiter-image.php";

    $filtreEquipe = array(
        'idJeu' => FILTER_SANITIZE_NUMBER_INT,
        'idEquipe' => FILTER_SANITIZE_NUMBER_INT,
        'nom' => FILTER_SANITIZE_STRING,
        'composition' => FILTER_SANITIZE_STRING // TODO : Filtrer pour l'image
    );
    $equipe = filter_var_array($_POST, $filtreEquipe);
    $equipe['logo'] = filter_var($_FILES["logo"]["name"], FILTER_SANITIZE_STRING);
    //print_r(filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT));
    //exit(0);
	//$equipe['idEquipe'] = filter_var($_GET['equipe'], FILTER_SANITIZE_NUMBER_INT); //$_GET['equipe']; // TODO filter
    
    include_once "../accesseur/EquipeDAO.php";
	$equipeDAO = new EquipeDAO();
	$equipeDAO -> modifierEquipe($equipe); 
}
?>