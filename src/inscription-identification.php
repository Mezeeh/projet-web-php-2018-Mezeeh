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
		<nav></nav>
	</header>

	<ul>
		<li><a href="index.php">Accueil</a></li>
		<li><a href="liste-jeu.php">Jeux eSports</a></li>
		<li><a href="contact.php">Contact</a></li>
	</ul>
	
	<section id="contenu">
		<header><h2>Inscription d'un membre - Identification</h2></header>
	
		<form method="post" action="inscription-informations.php">
		
		
		<fieldset>
		
			<legend>Identité</legend>
		
			<div id="entree-prenom">
				<label for="prenom">Prénom</label>
				<input type="text" id="prenom" name="prenom"/>
			</div>
			
			<div id="entree-nom">
				<label for="nom">Nom</label>
				<input type="text" id="nom" name="nom"/>
			</div>
			
			<div id="entree-pseudonyme">
				<label for="pseudonyme">Pseudonyme</label>
				<input type="text" id="pseudonyme" name="pseudonyme"/>
			</div>

			<div id="entree-motdepasse">
				<label for="motdepasse">Mot de passe</label>
				<input type="password" id="motdepasse" name="motdepasse"/>
			</div>			
			
		</fieldset>
			
		<input type="submit" name="action-inscription-identification" value="Suivant">			
			
		</form>
	
	</section>
	
	<footer><span id="signature"></span></footer>
</body>
</html>