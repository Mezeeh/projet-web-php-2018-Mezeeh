<?php
    include_once "action/action-affichage-authentification.php";

    include "accesseur/JeuDAO.php";

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
    </header>

    <ul>
		<li><a href="index.php">Accueil</a></li>
		<li><a href="liste-jeu.php">Jeux eSports</a></li>
		<li><a href="contact.php">Contact</a></li>
	</ul>

	<section id="contenu">
        <h2>Jeux eSports</h2>

        <section id="section-recherche">
            <form method="POST" action="" id="formulaire-recherche">
                <label for="recherche"></lable>
                <input type="text" name="recherche" id="recherche">
                <input type="submit"value="Rechercher">
            </form>
        </section>
	
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