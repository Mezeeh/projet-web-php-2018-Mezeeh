<?php 
if(!empty($_POST['action-effacer-apparition']))
{
    if(!empty($_POST['confirmation-oui']))
	{		
		$idEquipe = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
        
        include_once "../accesseur/EquipeDAO.php";
        $equipeDAO = new EquipeDAO();
        $equipeDAO -> supprimerEquipe($idEquipe); 
	}
}
?>