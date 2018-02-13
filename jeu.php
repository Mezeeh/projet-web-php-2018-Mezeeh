<?php
    include_once "base-de-donnees.php";

    $idJeu = $_GET["jeu"];

    $LIRE_JEU= "SELECT * FROM jeu WHERE idjeu = $idJeu";
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
            <p>Éditer par <?=$jeu["editeur"]?></p>
        </div>
        
        <div>
            <p>Publié le <?=$jeu["anneePublication"]?></p>
        </div>
        
        <div>
            <p>Le plus grand cash prize à ce jour est de <?=number_format($jeu["cashPrizeMax"], 2, ',', ' ')?>$</p>
        </div>
        
        <div>
            <p>Record de <?=number_format($jeu["spectateursMax"], 2, ',', ' ')?> spectateurs simultanés</p>
        </div>
        
        <div>
            <p>Dernier tournoi : <?=$jeu["dernierTournoi"]?></p>
        </div>
    </section>
</body>
</html>