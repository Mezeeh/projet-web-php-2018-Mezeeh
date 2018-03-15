<?php
	$idJeu = filter_var($_GET["idJeu"], FILTER_SANITIZE_NUMBER_INT);
	//echo $idJeu;
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
		<header><h2>Ajouter une équipe</h2></header>
		<form method="post" action="action/action-ajouter-equipe.php?equipe=<?=$idJeu?>">
		
			<div>
				<label for="nom">Nom</label>
				<input type="text" name="nom" id="nom"/>
			</div>
		
			<div>
				<label for="composition">Composition de l'équipe</label>
				<input type="text" name="composition" id="composition"/>
			</div>
			
			<div>
				<label for="logo">Logo de l'équipe</label>
				<input type="file" name="logo" id="logo"/>
			</div>		
						
			<input type="hidden" name="idJeu" value="<?=$idJeu?>"/>
						
			<input type="submit" name="action-ajouter-equipe" value="Ajouter"/>
			
		</form>
	</section>
	
	<footer><span id="signature"></span></footer>
</body>
</html>