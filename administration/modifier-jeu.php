<?php
    include_once "base-de-donnees.php";

    $numero = $_GET["numero"];

    $LIRE_JEU = "SELECT * FROM jeu WHERE idJeu = $numero";
    $requeteLireJeu = $pdo->prepare($LIRE_JEU);
    $requeteLireJeu->execute();
    $jeu = $requeteLireJeu->fetch();

    //print_r($jeu);
    //var_dump($jeu);
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
		<header><h2>Modifier un jeu</h2></header>
		<form method="post" action="action-modifier-jeu.php">
			<div>
				<label for="nom">Nom</label>
				<input type="text" name="nom" id="nom" value="<?=$jeu["nom"]?>"/>
			</div>
		
			<div>
				<label for="editeur">Éditeur</label>
				<input type="text" name="editeur" id="editeur" value="<?=$jeu["editeur"]?>"/>
			</div>
			
			<div>
				<label for="description">Description</label>
				<textarea name="description" id="description"><?=$jeu["description"]?></textarea>
			</div>
			
			<div>
				<label for="date-publication">Année de publication</label>
				<input type="date" id="date-publication" name="date-publication" value="<?=$jeu["anneePublication"]?>"/>
			</div>
			
			<div>
				<label for="cash-prize-max">Plus grand cash-prize</label>
				<input type="number" id="cash-prize-max" name="cash-prize-max" value="<?=$jeu["cashPrizeMax"]?>"/>
			</div>
			
			<div>
				<label for="spectateurs-max">Plus grand nombre de spectateurs</label>
				<input type="number" id="spectateurs-max" name="spectateurs-max" value="<?=$jeu["spectateursMax"]?>"/>
			</div>
			
			<div>
				<label for="dernier-tournoi">Dernier gros tournoi</label>
				<input type="text" id="dernier-tournoi" name="dernier-tournoi" value="<?=$jeu["dernierTournoi"]?>"/>
			</div>
			
			<input type="hidden" name="id" value="<?=$jeu["idJeu"]?>"/>
			
			<input type="submit"/>
		</form>
	</section>
	
	<footer><span id="signature"></span></footer>
</body>
</html>