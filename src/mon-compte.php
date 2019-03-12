<?php
    include_once "action/action-affichage-authentification.php";
    var_dump($_SESSION);

    $monCompte = $_SESSION["membre"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
        <header><h2>Mon compte</h2></header>

		<form method="post" action="action/action-modication-compte.php">
            
            <fieldset>
                <legend>Identité</legend>
            
                <div id="entree-prenom">
                    <label for="prenom">Prénom</label>
                    <input type="text" id="prenom" name="prenom" value='<?= $monCompte["prenom"]; ?>'/>
                </div>
                
                <div id="entree-nom">
                    <label for="nom">Nom</label>
                    <input type="text" id="nom" name="nom" value='<?= $monCompte["nom"]; ?>'/>
                </div>
                
                <div id="entree-courriel">
                    <label for="courriel">Courriel</label>
                    <input type="email" id="courriel" name="courriel" value='<?= $monCompte["courriel"]; ?>'/>
                </div>	
                
            </fieldset>  

            <input type="submit" name="action-modication-identite" value="Sauvegarder les changements">			
			
		</form>

        <form action="action/action-modication-compte.php" method="post">
            <fieldset>
                <legend>Sécurité</legend>

            <div id="entree-motdepasse">
                <label for="motdepasse">Nouveau mot de passe</label>
                <input type="password" id="motdepasse" name="motdepasse"/>
            </div>		

            <div id="entree-motdepasse-confirmation">
                <label for="motdepasse-confirmation">Confirmer le nouveau mot de passe</label>
                <input type="password" id="motdepasse-confirmation" name="motdepasse-confirmation"/>
            </div>

            </fieldset>

            <input type="submit" name="action-modication-securite" value="Sauvegarder les changements">
        </form>
	
	</section>
	
	<footer><span id="signature"></span></footer>
</body>
</html>