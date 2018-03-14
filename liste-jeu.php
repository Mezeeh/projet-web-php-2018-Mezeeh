<?php
    //include_once "base-de-donnees.php";
    include "accesseur/JeuDAO.php";

    $listeJeuDAO = new JeuDAO();
    $listeJeu = $listeJeuDAO -> lireListe();

    /* $requeteListeJeux = $pdo->prepare("SELECT * FROM jeu");
    $requeteListeJeux->execute();
    $listeJeu = $requeteListeJeux->fetchAll(); */
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
    </header>

    <ul>
		<li><a href="index.php">Accueil</a></li>
		<li><a href="liste-jeu.php">Jeux eSports</a></li>
		<li><a href="contact.php">Contact</a></li>
	</ul>

	<section id="contenu">
        <h2>Jeux eSports</h2>
	
        <?php
            foreach($listeJeu as $jeu)
            {?>
               <div>
                   <a href="jeu.php?jeu=<?=$jeu["idJeu"]?>"><?=$jeu["nom"]?></a>
               </div> 
        <?php
            }
        ?>
    </section>
</body>
</html>