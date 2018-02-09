<?php
    $base = "esporthq";
    $hote = "localhost";
    $usager = "root";
    $motDePasse = "sudoroot";

    $dsn = 'mysql:dbname='. $base . ';host=' . $hote;
    $pdo = new PDO($dsn, $usager, $motDePasse);

    $numero = $_GET["numero"];

    $LIRE_JEU = "SELECT * FROM jeu WHERE idJeu = $numero";
    //$curseurPokemon = $pdo->query($LIRE_POKEMON);
    //$pokemon = $curseurPokemon->fetch();
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
		<header><h2>Supprimer un jeu</h2></header>
		<form method="post" action="action-supprimer-jeu.php">
			<input type="hidden" name="id" value="<?=$jeu["idJeu"]?>"/>
			
			Voulez-vous vraiment supprimer <?=$jeu["nom"]?> ?
			
			<input type="submit" name="confirmation-oui" value="Oui"/>
			<input type="submit" name="confirmation-non" value="Non"/>
		</form>
	</section>
	
	<footer><span id="signature"></span></footer>
</body>
</html>