<?php
if(!empty($_POST['action-ajouter-equipe']))
{
    include_once "action-traiter-image.php";

    $filtreEquipe = array(
        'idJeu' => FILTER_SANITIZE_NUMBER_INT,
        'nom' => FILTER_SANITIZE_STRING,
        'composition' => FILTER_SANITIZE_STRING, // TODO : Filtrer pour l'image
    );
    $equipe = filter_var_array($_POST, $filtreEquipe);
    //print_r($_FILES["logo"]["name"]);
    $equipe['logo'] = filter_var($_FILES["logo"]["name"], FILTER_SANITIZE_STRING);
    
    include_once "../accesseur/EquipeDAO.php";
    $equipeDAO = new EquipeDAO();
	$equipeDAO -> ajouterEquipe($equipe);
}
?>