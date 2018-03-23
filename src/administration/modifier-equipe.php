<?php
	$idEquipe = filter_var($_GET['idEquipe'], FILTER_SANITIZE_NUMBER_INT);
	$idJeu = filter_var($_GET['idJeu'], FILTER_SANITIZE_NUMBER_INT);
	
	include_once "../accesseur/EquipeDAO.php";
	$equipeDAO = new EquipeDAO();
	$equipe = $equipeDAO->lireEquipe($idEquipe);
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
		<header><h2>Modifier une équipe</h2></header>
        <form method="post" action="modifier-jeu.php?jeu=<?=$idJeu?>">
            <div>
				<label for="logo">Logo de l'équipe</label>
                <input type="file" name="logo" id="logo"/>
            </div>		
			
			<div>
				<label for="nom">Nom de l'équipe</label>
				<input type="text" name="nom" id="nom" value="<?=$equipe['nom']?>"/>
			</div>
			
			<div>
				<label for="composition">Composition de l'équipe</label>
				<input type="text" name="composition" id="composition" value="<?=$equipe['composition']?>"/>
			</div>
			
			<input type="hidden" name="idJeu" value="<?=$idJeu?>"/>
			<input type="hidden" name="idEquipe" value="<?=$equipe['idEquipe']?>"/>
												
			<input type="submit" name="action-modifier-equipe" value="Enregistrer"/>
        </form>
        
        <nav><a href="modifier-jeu.php?jeu=<?=$equipe['idJeu']?>">Retour</a></nav>
	</section>
	
	<footer><span id="signature"></span></footer>
</body>
</html>