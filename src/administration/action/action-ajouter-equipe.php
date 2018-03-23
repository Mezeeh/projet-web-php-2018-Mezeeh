<?php
if(!empty($_POST['action-ajouter-equipe']))
{
    $filtreEquipe = array(
        'idJeu' => FILTER_SANITIZE_NUMBER_INT,
        'nom' => FILTER_SANITIZE_STRING,
        'composition' => FILTER_SANITIZE_STRING // TODO : Filtrer pour l'image
    );
    $equipe = filter_var_array($_POST, $filtreEquipe);
    
    include_once "../accesseur/EquipeDAO.php";
    $equipeDAO = new EquipeDAO();
	$equipeDAO -> ajouterEquipe($equipe);
}
?>