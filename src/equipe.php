<?php
	include_once "action/action-affichage-authentification.php";

    $idEquipe = filter_var($_GET["idEquipe"], FILTER_SANITIZE_NUMBER_INT);;

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

	<ul>
		<li><a href="index.php">Accueil</a></li>
		<li><a href="liste-jeu.php">Jeux eSports</a></li>
		<li><a href="contact.php">Contact</a></li>
	</ul>
	
	<section id="contenu">
		<header><h2><?=$equipe['nom']?></h2></header>

		<img src="illustration/<?=$equipe['logo']?>" alt="Logo de <?=$equipe['nom']?>"/>

		<p><?=$equipe['composition']?></p>
		
		<nav><a href="jeu.php?jeu=<?=$equipe['idJeu']?>">Retour</a></nav>
	</section>
	
	
	<footer><span id="signature"></span></footer>
</body>
</html>