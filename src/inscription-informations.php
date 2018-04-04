<?php 
session_start();

// Traitement de identification.php
$filtreMembre = array(
	'prenom' => FILTER_SANITIZE_ENCODED,
	'nom' => FILTER_SANITIZE_ENCODED,
	'pseudonyme' => FILTER_SANITIZE_ENCODED,
	'motdepasse' => FILTER_SANITIZE_ENCODED,
);

$_SESSION['membre'] = filter_var_array($_POST, $filtreMembre);
print_r($_SESSION);

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
		<header><h2>Inscription d'un membre - Informations</h2></header>
	
		<form method="post" action="action/action-validation-authentification.php">
		
		
		<fieldset>
		
			<legend>Informations</legend>
		
			<div id="entree-genre">
				<label for="homme">Homme</label>
				<input type="radio" id="homme" value="homme" name="homme">
				<label for="femme">Femme</label>
				<input type="radio" id="femme" value="femme" name="femme">
			</div>
			
			<div id="entree-courriel">
				<label for="courriel">Courriel</label>
				<input type="text" id="courriel" name="courriel"/>
			</div>	
						
		</fieldset>
		
		<input type="submit" name="action-inscription-identification" value="Suivant">			
			
		</form>
	
	</section>
	
	<footer><span id="signature"></span></footer>
</body>
</html>