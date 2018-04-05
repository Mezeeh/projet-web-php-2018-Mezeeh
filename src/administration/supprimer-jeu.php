<?php
	include "action/action-verifier-identite.php";

	$idJeu = filter_var($_GET["jeu"], FILTER_SANITIZE_NUMBER_INT); 
	
	include_once "../accesseur/JeuDAO.php";
	$jeuDAO = new JeuDAO();
	$jeu = $jeuDAO -> lireJeu($idJeu);
?>

<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<header>
		<h1>eSportHQ</h1>
		<h2>Supprimer un jeu</h2>
	</header>
	
	<section id="contenu">
		<form method="post" action="index.php">
			<input type="hidden" name="id" value="<?=$jeu["idJeu"]?>"/>
			
			Voulez-vous vraiment supprimer <?=$jeu["nom"]?> ?
			
			<input type="submit" name="confirmation-oui" value="Oui"/>
			<input type="submit" name="confirmation-non" value="Non"/>

			<input type="hidden" name="action-supprimer-jeu" value="1"/> 
		</form>
	</section>
</body>
</html>