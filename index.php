<?php
	//include "liste-jeu.php";
	$jour = array("Dimanche","Lundi","Mardi","Mercredi","Jeudi","Vendredi","Samedi"); 
	$mois = array("","Janvier","Février","Mars","Avril","Mai","Juin","Juillet","Août","Septembre","Octobre","Novembre","Décembre"); 
	$dateDuJour = $jour[date("w")]." ".date("d")." ".$mois[date("n")]." ".date("Y"); 

	//echo "Nous sommes le ". $dateDuJour; 
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
        <header><h2>Accueil</h2></header>
        
        <div>
            <p>Nous somme <?=$dateDuJour?></p>
        </div>
    </section>
</body>
</html>