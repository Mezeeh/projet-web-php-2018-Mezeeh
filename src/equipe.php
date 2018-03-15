<?php
    $idEquipe = $_GET['idEquipe'];

    $LIRE_EQUIPE = "SELECT * FROM equipe WHERE idEquipe = $idEquipe";
    include_once "accesseur/base-de-donnees.php";
    $requeteLireEquipe = $pdo->prepare($LIRE_EQUIPE);
	$requeteLireEquipe->execute();
	$equipe = $requeteLireEquipe->fetch();
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