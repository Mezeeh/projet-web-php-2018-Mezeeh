<?php
    include "accesseur/JeuDAO.php";

    $idJeu = filter_var($_GET["jeu"], FILTER_SANITIZE_NUMBER_INT);

    $jeuDAO = new JeuDAO();
    $jeu = $jeuDAO -> lireJeu($idJeu);

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

    <ul>
		<li><a href="index.php">Accueil</a></li>
		<li><a href="liste-jeu.php">Jeux eSports</a></li>
		<li><a href="contact.php">Contact</a></li>
	</ul>
    
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
            <p>Record de <?=$jeu["spectateursMax"]?> spectateurs simultanés</p>
        </div>
        
        <div>
            <p>Dernier tournoi : <?=$jeu["dernierTournoi"]?></p>
        </div>
		
		<nav><a href="liste-jeu.php">Retour</a></nav>
    </section>
</body>
</html>