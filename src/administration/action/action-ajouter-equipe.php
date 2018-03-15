<?php
if(!empty($_POST['action-ajouter-equipe']))
{
    $equipe = $_POST; // TODO filter
    
    include_once "../../accesseur/EquipeDAO.php";
    $equipeDAO = new EquipeDAO();
	$equipeDAO -> ajouterEquipe($equipe);
}
?>