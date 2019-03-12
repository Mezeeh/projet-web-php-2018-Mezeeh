<?php
	include_once "action/action-affichage-authentification.php";
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

	if($tempsRestantAvantDota2TI > 0){
		$minuteRestantAvantDota2TI = $tempsRestantAvantDota2TI / 60;
		$heureRestantAvantDota2TI = $minuteRestantAvantDota2TI / 60;
		$jourRestantAvantDota2TI = $heureRestantAvantDota2TI / 24;

		$secondeRestantAvantDota2TI = floor($tempsRestantAvantDota2TI % 60);
		$minuteRestantAvantDota2TI = floor($minuteRestantAvantDota2TI % 60);
		$heureRestantAvantDota2TI = floor($heureRestantAvantDota2TI % 24);
		$jourRestantAvantDota2TI = floor($jourRestantAvantDota2TI);
	} else {
		$secondeRestantAvantDota2TI = 0;
		$minuteRestantAvantDota2TI = 0;
		$heureRestantAvantDota2TI = 0;
		$jourRestantAvantDota2TI = 0;
	}

	include_once "accesseur/JeuDAO.php";

	$jeuDAO = new JeuDAO();
	$listeCompetitions = $jeuDAO->rechercherCompetition();
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
        <header>
			<h2>Accueil</h2>
				
			<script type="text/javascript" src="lib/Ajax.js"></script>
        	<script type="text/javascript">
				var competitionChoisie;
				function afficherTempsAvantCompetition(competition){
					if(!competition){
						competition = document.querySelector('#competitions');
						competition = competition.options[competition.selectedIndex].value;
					}

					parametre = "competition=" + competition;
					competitionChoisie = competition;
    				// console.log(parametre);

					ajax = new Ajax();
					url = 'http://localhost/eSportHQ/src/action/action-temps-restant-avant-competition.php';
					// url = 'http://localhost/esporthq/action/action-temps-restant-avant-competition.php';
					ajax.executer("GET", url, parametre, recevoirLeTempsRestant);
				}

				function recevoirLeTempsRestant(ajax){
					// console.log("recevoirLeTempsRestant");
					reponse = JSON.parse(ajax.responseText);
					// console.log('temps restant ='+reponse);

					joursRestants = reponse.dateProchainTournoi.joursRestants;
					heuresRestantes = reponse.dateProchainTournoi.heuresRestantes;
					minutesRestantes = reponse.dateProchainTournoi.minutesRestantes;
					secondesRestantes = reponse.dateProchainTournoi.secondesRestantes;

					mettreAJourTempsRestant(joursRestants, heuresRestantes, minutesRestantes, secondesRestantes);
				}

				function mettreAJourTempsRestant(joursRestants, heuresRestantes, minutesRestantes, secondesRestantes){
					//console.log("mettreAJourTempsRestant");

					document.querySelector('#compteur-temps-avant-competition').style.display = "inline-block";
					
					document.querySelector('#compteur-temps-avant-competition').innerHTML = `Il reste ${joursRestants} jours, ${heuresRestantes} heures, ${minutesRestantes} minutes et ${secondesRestantes} secondes avant ${competitionChoisie}.`;

					setTimeout(() => {
						afficherTempsAvantCompetition();
					}, 1000);
				}
			</script>

			<style type="text/css">
				#compteur-temps-avant-competition{
					display: none;
				}
			</style>
		</header>
        
        <div>
            <p>Nous somme le <?=$dateDuJour?></p>
        </div>

		<div>
			Tournoi à venir:
			<select name="competitions" id="competitions" onchange="afficherTempsAvantCompetition(this.value)">
				<option selected disabled hidden>Choisir une compétition</option>

				<?php
					foreach ($listeCompetitions as $prochainTournoi) {
						?>
							<option value="<?= $prochainTournoi["prochainTournoi"]; ?>"><?= $prochainTournoi["prochainTournoi"]; ?></option>
						<?php
					}
				?>
			</select>
		</div>

		<div id="compteur-temps-avant-competition"></div>
    </section>
</body>
</html>