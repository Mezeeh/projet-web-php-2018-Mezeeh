<?php
    $base = "esporthq";
    $hote = "localhost";
    $usager = "root";
    $motDePasse = "sudoroot";

    $dsn = 'mysql:dbname='. $base . ';host=' . $hote;
    $pdo = new PDO($dsn, $usager, $motDePasse);

    $numero = $_GET["numero"];

    $LIRE_JEU= "SELECT * FROM jeu WHERE idjeu = $numero";
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
	<title>eSportHQ</title>
</head>
<body>
	<header>
        <h1>eSportHQ</h1>
        <nav></nav>
    </header>
    
    <section id="contenu">
        <header><h2><?=$jeu["nom"]?></h2></header>
        
        <div>
            <?=$jeu["description"]?>
        </div>
        
        <div>
            <?=$jeu["editeur"]?>
        </div>
    </section>
</body>
</html>