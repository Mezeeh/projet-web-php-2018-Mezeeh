<?php
	include_once "action/action-affichage-authentification.php";
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
			<h2>Connexion</h2>
		</header>
	
		<ul>
			<li><a href="index.php">Accueil</a></li>
			<li><a href="liste-jeu.php">Jeux eSports</a></li>
			<li><a href="contact.php">Contact</a></li>
		</ul>

<form method="post" action="action/action-traitement-authentification.php">

	<div>
		<label for="pseudonyme">Pseudonyme</label>
		<input type="text" name="pseudonyme" id="pseudonyme"/>
	</div>
	<div>
		<label for="motdepasse">Mot de passe</label>
		<input type="password" name="motdepasse" id="motdepasse"/>
	</div>
	<input type="submit" name="authentification-membre" value="Se connecter"/>

</form>

</body>
</html>
