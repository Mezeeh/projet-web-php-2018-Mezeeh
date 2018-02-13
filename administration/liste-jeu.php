<?php
    //print_r($_POST);
    //exit(0);

    include_once "action-ajouter-jeu.php";
    include_once "action-supprimer-jeu.php";
    include_once "base-de-donnees.php";;

    include_once "../accesseur/JeuDAO.php";

    $listeJeuDAO = new JeuDAO();
    $listeJeu = $listeJeuDAO -> lireListe();
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
                   <!--<a href="jeu.php?jeu=<?=$jeu["idJeu"]?>"><?=$jeu["nom"]?></a>-->
				   <?=$jeu["nom"]?>
				   <a href="modifier-jeu.php?jeu=<?=$jeu["idJeu"]?>">Modifier</a>
				   <a href="supprimer-jeu.php?jeu=<?=$jeu["idJeu"]?>">Supprimer</a>
               </div> 
        <?php
            }
        ?>
    </section>
</body>
</html>