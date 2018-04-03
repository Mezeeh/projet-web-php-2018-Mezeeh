<?php
    //print_r($_POST);
    //exit(0);

    include_once "action/action-ajouter-jeu.php";
    include_once "action/action-supprimer-jeu.php";
    include_once "action/base-de-donnees.php";

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
        <h2>Jeux eSports - Administration</h2>
    </header>

	<section id="contenu">
        <div >
            <a href="authentification-admin.html">S'identifier</a>
        </div>
        <div>
			<a href="ajouter-jeu.html">Ajouter un jeu eSport</a>
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