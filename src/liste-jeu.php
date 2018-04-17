<?php
    include_once "action/action-affichage-authentification.php";

    include "accesseur/JeuDAO.php";

    $listeJeuDAO = new JeuDAO();

    $recherche = "";
    if(!empty($_POST['action-rechercher'])){
        //print_r($_POST);
        $recherche = filter_var($_POST['recherche'], FILTER_SANITIZE_STRING);
        //print_r($recherche);
        $listeJeu = $listeJeuDAO -> rechercherListe($recherche);
    }
    else{
        $listeJeu = $listeJeuDAO -> lireListe();
    }
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
        <script type="text/javascript" src="lib/Ajax.js"></script>
        <script type="text/javascript">
            function rechercherSuggestions(){
                //console.log("onkeyup");
                recherche = document.querySelector("#recherche").value;
			    console.log('recherche='+recherche);

                ajax = new Ajax();
                url = 'http://localhost/eSportHQ/src/action/action-suggestion.php';
			    ajax.executer("GET", url, "", recevoirLesSuggestions);
            }

            function recevoirLesSuggestions(ajax){
                //console.log("recevoirLesSuggestions");
                suggestions = ajax.responseText;
			    console.log('suggestions='+suggestions);

                document.querySelector("#boite-suggestions").style.display = "block";
                document.querySelector("#boite-suggestions").innerHTML = suggestions;
            }
        </script>
        <style>
            #section-recherche
            {
                position:relative;
            }
            #boite-suggestions
            {
                display:none;
                border:solid 2px #ceaf37;
                background-color:#f7e9b4;
                position:absolute;
            }
	    </style>
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
                <input type="text" name="recherche" id="recherche" value="<?=$recherche?>" onkeyup="rechercherSuggestions()">
                <input type="submit"value="Rechercher" name="action-rechercher">
            </form>

            <div id="boite-suggestions"></div>
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