<?php
if(!empty($_POST['action-modifier-equipe']))
{
    $filtreEquipe = array(
        'nom' => FILTER_SANITIZE_STRING,
        'composition' => FILTER_SANITIZE_STRING // TODO : Filtrer pour l'image
    );
    $equipe = filter_var_array($_POST, $filtreEquipe);
	$equipe['idEquipe'] = filter_var($_GET['equipe'], FILTER_SANITIZE_NUMBER_INT); //$_GET['equipe']; // TODO filter
    
    include_once "../../accesseur/EquipeDAO.php";
	$equipeDAO = new EquipeDAO();
	$equipeDAO -> modifierEquipe($equipe); 
}
?>