<?php
    include_once "base-de-donnees.php";

    $requeteListeJeux = $pdo->prepare("SELECT * FROM jeu");
    $requeteListeJeux->execute();
    $listeJeu = $requeteListeJeux->fetchAll();
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