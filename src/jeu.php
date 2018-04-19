<?php
    include_once "action/action-affichage-authentification.php";

    include "accesseur/JeuDAO.php";

    $idJeu = filter_var($_GET["jeu"], FILTER_SANITIZE_NUMBER_INT);

    $jeuDAO = new JeuDAO();
    $jeu = $jeuDAO -> lireJeu($idJeu);

    //print_r($jeu);
    //var_dump($jeu);
    include "accesseur/EquipeDAO.php";
    $equipeDAO = new EquipeDAO();
    $listeEquipes = $equipeDAO -> listerEquipes($idJeu);
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

        <style>
            .equipe{
                float: left;
                position: relative;
                margin-right:5px;
                margin-bottom: 5px;
                /* background-color:pink; */
                width:120px;
                height:120px;
                border-radius:50%;
                overflow:hidden;
            }

            .equipe:hover .vignette-texte{
                display:block;
            }

            .liste-equipe::after{
                content:"";
                display:block;
                clear:both;
            }
            .vignette-texte{
                display:none;
                position:absolute;
                top:0px;
                left:0px;
                font-weight: bold;
                height:100%;
                width:100%;
                text-align:center;
                line-height:120px;
                background-color:rgba(173, 198, 192, 0.4);
            }

        </style>
    </header>

    <ul>
		<li><a href="index.php">Accueil</a></li>
		<li><a href="liste-jeu.php">Jeux eSports</a></li>
		<li><a href="contact.php">Contact</a></li>
	</ul>
    
    <section id="contenu">
        <header><h2><?=$jeu["nom"]?></h2></header>
        
        <section>
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
        </section>

        <section id="compte-a-rebours-evenement">
            <h3 id="nomEvenement">nomEvenement</h3>

            <div id="compteur">
                compteur
            </div>
        </section>

        <section class="liste-equipe">
            <h3>Équipes</h3>

            <?php
                foreach($listeEquipes as $equipe){
                    ?>
                    <div class="equipe">
                        <a class="illustration" href="equipe.php?idEquipe=<?=$equipe['idEquipe']?>">
                        <img src="illustration/miniature/<?=$equipe['logo']?>" alt="Miniature du logo de <?=$equipe['nom']?>"/>
                            <div class="vignette-texte">
                                <?=$equipe['nom']?>
                            </div>
                        </a>
                    </div>
                <?php
                }
                ?>
        </section>
        
        <nav><a href="liste-jeu.php">Retour</a></nav>
    </section>
</body>
</html>