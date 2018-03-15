<?php
if(!empty($_POST['action-modifier-equipe']))
{
	$equipe = $_POST; // TODO filter
	$equipe['idEquipe'] = $_GET['idEquipe']; // TODO filter
	include_once "base-de-donnees.php";
    
    $MODIFIER_EQUIPE = "UPDATE equipe SET nom = '".$equipe['nom']."', composition = '".$equipe['composition']."' WHERE idEquipe = '".$equipe['idEquipe']."'";
    $requeteModifierEquipe = $pdo->prepare($MODIFIER_EQUIPE);
    $requeteModifierEquipe->execute();
}
?>