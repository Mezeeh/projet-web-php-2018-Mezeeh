<?php
if(!empty($_POST['action-modifier-equipe']))
{
    $equipe = $_POST; // TODO filter
	$equipe['idEquipe'] = $_GET['equipe']; // TODO filter
    
    include_once "../../accesseur/EquipeDAO.php";
	$equipeDAO = new EquipeDAO();
	$equipeDAO -> modifierEquipe($equipe); 
}
?>