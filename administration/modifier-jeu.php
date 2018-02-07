<?php
    $base = "mondepokemon";
    $hote = "localhost";
    $usager = "root";
    $motDePasse = "sudoroot";

    $dsn = 'mysql:dbname='. $base . ';host=' . $hote;
    $pdo = new PDO($dsn, $usager, $motDePasse);

    $numero = $_GET["numero"];

    $LIRE_POKEMON = "SELECT * FROM pokemon WHERE idpokemon = $numero";
    //$curseurPokemon = $pdo->query($LIRE_POKEMON);
    //$pokemon = $curseurPokemon->fetch();
    $requeteLirePokemon = $pdo->prepare($LIRE_POKEMON);
    $requeteLirePokemon->execute();
    $pokemon = $requeteLirePokemon->fetch();

    //print_r($pokemon);
    //var_dump($pokemon);
?>

<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<header>
		<h1>Administration du monde des pokemons</h1>
		<nav></nav>
	</header>
	
	<section id="contenu">
		<header><h2>Modifier un pokemon</h2></header>
		<form method="post" action="action-modifier-pokemon.php">
		
			<div>
				<label for="nom">Nom</label>
				<input type="text" name="nom" id="nom" value="<?=$pokemon["nom"]?>"/>
			</div>
		
			<div>
				<label for="type">Type</label>
				<input type="text" name="type" id="type" value="<?=$pokemon["type"]?>"/>
			</div>
			
			<div>
				<label for="generation">Generation</label>
				<input type="number" name="generation" id="generation" value="<?=$pokemon["generation"]?>"/>
			</div>
			
			<div>
				<label for="resume">Resume</label>
				<textarea name="resume" id="resume"><?=$pokemon["resume"]?></textarea>
			</div>
			
			<input type="hidden" name="id" value="<?=$pokemon["idPokemon"]?>"/>
			
			<input type="submit"/>
			
		</form>
	</section>
	
	<footer><span id="signature"></span></footer>
</body>
</html>