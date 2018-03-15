<?php
    $idEquipe = $_GET['idEquipe'];

	include "accesseur/EquipeDAO.php";
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
		<header><h2><?=$equipe['nom']?></h2></header>

		<p><?=$equipe['composition']?></p>
		
		<nav><a href="jeu.php?jeu=<?=$equipe['idJeu']?>">Retour</a></nav>
	</section>
	
	
	<footer><span id="signature"></span></footer>
</body>
</html>