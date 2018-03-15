<?php
if(!empty($_POST['action-ajouter-equipe']))
{
	//echo "ajouter une apparition";
	$equipe = $_POST; // TODO filter
	// $_POST contient deja le contexte $idPokemon à cause du champs hidden, 
	// pas besoin de combiner, sinon ce serait : 
	// $apparition['idPokemon'] = $_GET['pokemon']; // TODO filter
    include_once "base-de-donnees.php";
    $AJOUTER_EQUIPE = "INSERT INTO equipe(idJeu, nom, composition) VALUES('".$equipe['idJeu']."','".$equipe['nom']."','".$equipe['composition']."')";
    $requeteAjouterEquipe = $pdo->prepare($AJOUTER_EQUIPE);
    $requeteAjouterEquipe->execute();
}
?>