<?php
	$idJeu = $_GET["jeu"]; 
	
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
		<h1>Administration des jeux eSports</h1>
		<nav></nav>
	</header>
	
	<section id="contenu">
		<header><h2>Supprimer un jeu</h2></header>
		<form method="post" action="liste-jeu.php">
			<input type="hidden" name="id" value="<?=$jeu["idJeu"]?>"/>
			
			Voulez-vous vraiment supprimer <?=$jeu["nom"]?> ?
			
			<input type="submit" name="confirmation-oui" value="Oui"/>
			<input type="submit" name="confirmation-non" value="Non"/>

			<input type="hidden" name="action-supprimer-jeu" value="1"/> 
		</form>
	</section>
</body>
</html>