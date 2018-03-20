<?php
	$idEquipe = filter_var($_GET['idEquipe'], FILTER_SANITIZE_NUMBER_INT);
	$idJeu = filter_var($_GET['idJeu'], FILTER_SANITIZE_NUMBER_INT);
    
    include_once "../accesseur/EquipeDAO.php";
	$equipeDAO = new EquipeDAO();
	$equipe = $equipeDAO -> lireEquipe($idEquipe);
?>
<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>eSportHQ</title>
</head>
<body>
	<header>
		<h1>eSportHQ</h1>
		<nav></nav>
	</header>
	
	<section id="contenu">
		<header><h2>Supprimer une équipe</h2></header>
		<form method="post" action="modifier-jeu.php?jeu=<?=$idJeu?>">
			
			<input type="hidden" name="id" value="<?=$idEquipe?>"/>

			Voulez-vous vraiment effacer l'équipe <?=$equipe['nom']?> ?

			<input type="submit" name="confirmation-oui" value="Oui"/>
			<input type="submit" name="confirmation-non" value="Non"/>
			
			<input type="hidden" name="action-effacer-apparition" value="1"/>
			
		</form>
	</section>
	
	<footer><span id="signature"></span></footer>
</body>
</html>