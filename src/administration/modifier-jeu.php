<?php
	//echo "formulaire envoye";
	include "action/action-modifier-jeu.php";

    $idJeu = filter_var($_GET["jeu"], FILTER_SANITIZE_NUMBER_INT);
	
	include_once "../accesseur/JeuDAO.php";

	$jeuDAO = new JeuDAO();
    $jeu = $jeuDAO -> lireJeu($idJeu);

    //print_r($jeu);
	//var_dump($jeu);
	include_once "action/base-de-donnees.php";
    $LISTER_EQUIPES = "SELECT * FROM equipe WHERE idJeu = " . $idJeu;
    $requeteListerEquipes = $pdo->prepare($LISTER_EQUIPES);
    $requeteListerEquipes->execute();
    $listeEquipes = $requeteListerEquipes->fetchAll();
?>

<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<header>
		<h1>eSportHQ</h1>
		<h2>Modifier un jeu</h2>
	</header>
	
	<section id="contenu">
		<section>
			<form method="post" action="modifier-jeu.php?jeu=<?=$_GET["jeu"]?>">
				<div>
					<label for="nom">Nom</label>
					<input type="text" name="nom" id="nom" value="<?=$jeu["nom"]?>"/>
				</div>
			
				<div>
					<label for="editeur">Éditeur</label>
					<input type="text" name="editeur" id="editeur" value="<?=$jeu["editeur"]?>"/>
				</div>
				
				<div>
					<label for="description">Description</label>
					<textarea name="description" id="description"><?=$jeu["description"]?></textarea>
				</div>
				
				<div>
					<label for="date-publication">Année de publication</label>
					<input type="date" id="date-publication" name="date-publication" value="<?=$jeu["anneePublication"]?>"/>
				</div>
				
				<div>
					<label for="cash-prize-max">Plus grand cash-prize</label>
					<input type="number" id="cash-prize-max" name="cash-prize-max" value="<?=$jeu["cashPrizeMax"]?>"/>
				</div>
				
				<div>
					<label for="spectateurs-max">Plus grand nombre de spectateurs</label>
					<input type="number" id="spectateurs-max" name="spectateurs-max" value="<?=$jeu["spectateursMax"]?>"/>
				</div>
				
				<div>
					<label for="dernier-tournoi">Dernier gros tournoi</label>
					<input type="text" id="dernier-tournoi" name="dernier-tournoi" value="<?=$jeu["dernierTournoi"]?>"/>
				</div>
				
				<input type="hidden" name="id" value="<?=$jeu["idJeu"]?>"/>
				
				<input type="submit" name="action-modifier-jeu" value="Enregistrer"/>
			</form>
		</section>

		<section>
            <h3>Équipes</h3>
			<a href="ajouter-equipe.php?idJeu=<?=$jeu['idJeu']?>">Ajouter une équipe</a>
            <?php
                foreach($listeEquipes as $equipe){
                    ?>
                <div>
					<?=$equipe['nom']?>
                    <a href="modifier-equipe.php?idEquipe=<?=$equipe['idEquipe']?>">Modifier</a>
                    <a href="effacer-equipe.php?idEquipe=<?=$equipe['idEquipe']?>">Effacer</a>
                </div>
                <?php
                }
                ?>
		</section>
		
		<nav><a href="index.php">Retour</a></nav>
	</section>
	
	<footer><span id="signature"></span></footer>
</body>
</html>