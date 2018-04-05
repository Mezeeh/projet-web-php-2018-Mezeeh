<?php
	include "action/action-verifier-identite.php";
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

		<style>
			#desc {
				position:relative;
				height:100px;
			}
			#desc label, #description{
				display:inline-block;
				vertical-align: top;
				height:100%;
			}
		</style>
	</header>
	
	<section id="contenu">
		<h2>Ajouter un jeu eSport</h2>
		<form method="post" action="index.php">
		
			<div>
				<label for="nom">Nom</label>
				<input type="text" name="nom" id="nom"/>
			</div>
		
			<div>
				<label for="editeur">Éditeur</label>
				<input type="text" name="editeur" id="editeur"/>
			</div>
			
			<div id="desc">
				<label for="description">Description</label>
				<textarea name="description" id="description"></textarea>
			</div>
			
			<div>
				<label for="date-publication">Année de publication</label>
				<input type="date" id="date-publication" name="date-publication"/>
			</div>
			
			<div>
				<label for="cash-prize-max">Plus grand cash-prize</label>
				<input type="text" id="cash-prize-max" name="cash-prize-max"/>
			</div>
			
			<div>
				<label for="spectateurs-max">Plus grand nombre de spectateurs</label>
				<input type="text" id="spectateurs-max" name="spectateurs-max"/>
			</div>
			
			<div>
				<label for="dernier-tournoi">Dernier gros tournoi</label>
				<input type="text" id="dernier-tournoi" name="dernier-tournoi"/>
			</div>
			
			<input type="submit" name="action-ajouter-jeu" value="Ajouter"/>
			
		</form>
	</section>
	
	<footer><span id="signature"></span></footer>
</body>
</html>