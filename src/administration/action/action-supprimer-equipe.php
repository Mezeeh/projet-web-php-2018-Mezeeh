<?php 
if(!empty($_POST['action-effacer-apparition']))
{
    if(!empty($_POST['confirmation-oui']))
	{		
		$idEquipe = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
        
        include_once "base-de-donnees.php";
        $SUPPRIMER_EQUIPE = "DELETE FROM equipe WHERE idEquipe = " . $id;
        $requeteSupprimerEquipe = $pdo->prepare($SUPPRIMER_EQUIPE);
        $requeteSupprimerEquipe->execute();
	}
}
?>