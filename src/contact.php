<?php
	include_once "action/action-affichage-authentification.php";
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
    </header>
    
    <ul>
		<li><a href="index.php">Accueil</a></li>
		<li><a href="liste-jeu.php">Jeux eSports</a></li>
		<li><a href="contact.php">Contact</a></li>
	</ul>
	
	<section id="contenu">
		<h2>Contact</h2>
		<form method="post" action="export/export-jeu-messagerie.php">
		
			<div>
				<label for="nom">Votre nom</label>
				<input type="text" name="nom" id="nom"/>
			</div>
		
			<div>
				<label for="prenom">Votre prénom</label>
				<input type="text" name="prenom" id="prenom"/>
			</div>

			<div>
				<label for="courriel">Votre courriel</label>
				<input type="email" name="courriel" id="courriel"/>
			</div>
			
			<div>
				<label for="sujet">Votre sujet</label>
				<input type="text" name="sujet" id="sujet"/>
			</div>
			
			<div>
				<label for="message">Votre message</label>
				<textarea name="message" id="message"></textarea>
			</div>
			
			<input type="submit" value="Envoyer"/>
			
		</form>
	</section>
	
	<footer><span id="signature"></span></footer>
</body>
</html>