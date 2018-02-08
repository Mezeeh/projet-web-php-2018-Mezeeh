<?php
    $base = "esporthq";
    $hote = "localhost";
    $usager = "root";
    $motDePasse = "sudoroot";

    $dsn = 'mysql:dbname='. $base . ';host=' . $hote;
    $pdo = new PDO($dsn, $usager, $motDePasse);

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
        <div>
			<a href="formulaire-jeu.html">Ajouter un jeu eSport</a>
		</div>
		
		<?php
            foreach($listeJeu as $jeu)
            {?>
               <div>
                   <!--<a href="jeu.php?numero=<?=$jeu["idJeu"]?>"><?=$jeu["nom"]?></a>-->
				   <?=$jeu["nom"]?>
				   <a href="modifier-jeu.php?numero=<?=$jeu["idJeu"]?>">Modifier</a>
				   Supprimer
               </div> 
        <?php
            }
        ?>
    </section>
</body>
</html>