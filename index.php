<?php
	//include "liste-jeu.php";
	date_default_timezone_set('Canada/Eastern');
	//echo "The time is " . date("h:i:sa");
	$jour = array("Dimanche","Lundi","Mardi","Mercredi","Jeudi","Vendredi","Samedi"); 
	$mois = array("","Janvier","Février","Mars","Avril","Mai","Juin","Juillet","Août","Septembre","Octobre","Novembre","Décembre"); 
	$annee = date('Y');
	$dateDuJour = $jour[date("w")]." ".date("d")." ".$mois[date("n")]." ".$annee; 
	//echo "Nous sommes le ". $dateDuJour; 

	$dota2TI = mktime(0, 0, 0, 8, 7, $annee);
	//echo $dota2TI;
		 
	$tempsRestantAvantDota2TI = $dota2TI - time();
	$minuteRestantAvantDota2TI = $tempsRestantAvantDota2TI / 60;
	$heureRestantAvantDota2TI = $minuteRestantAvantDota2TI / 60;
	$jourRestantAvantDota2TI = $heureRestantAvantDota2TI / 24;

	$secondeRestantAvantDota2TI = floor($tempsRestantAvantDota2TI % 60);
	$minuteRestantAvantDota2TI = floor($minuteRestantAvantDota2TI % 60);
	$heureRestantAvantDota2TI = floor($heureRestantAvantDota2TI % 24);
	$jourRestantAvantDota2TI = floor($jourRestantAvantDota2TI);
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

	<ul>
		<li><a href="index.php">Accueil</a></li>
		<li><a href="liste-jeu.php">Jeux eSports</a></li>
		<li><a href="contact.php">Contact</a></li>
	</ul>
    
    <section id="contenu">
        <header><h2>Accueil</h2></header>
        
        <div>
            <p>Nous somme le <?=$dateDuJour?></p>
        </div>

		<div>
			<p><strong><?=$jourRestantAvantDota2TI?> jour(s) <?=$heureRestantAvantDota2TI?> heure(s) <?=$minuteRestantAvantDota2TI?> minute(s) et <?=$secondeRestantAvantDota2TI?> seconde(s)</strong> avant L'international de DOTA 2</p>
		</div>
    </section>
</body>
</html>