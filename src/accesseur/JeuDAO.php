<?php
    require_once "base-de-donnees.php";
    
    class JeuDAO
    {
        function rechercherCompetition(){
            global $pdo;

            $LISTE_COMPETITION = "SELECT prochainTournoi FROM jeu";
            $requeteListeCompetitions = $pdo->prepare($LISTE_COMPETITION);
            $requeteListeCompetitions->execute();
            $listeCompetitions = $requeteListeCompetitions->fetchAll();

            return $listeCompetitions;
        }

        function rechercherDateCompetition($competition){
            global $pdo;

            $LIRE_DATE_COMPETITION = "SELECT dateProchainTournoi FROM jeu WHERE prochainTournoi = :prochainTournoi";
            $requeteDateCompetition = $pdo->prepare($LIRE_DATE_COMPETITION);
            $requeteDateCompetition->bindParam(':prochainTournoi', $competition, PDO::PARAM_STR);
            $requeteDateCompetition->execute();
            $dateCompetition = $requeteDateCompetition->fetch();

            return $dateCompetition;
        }

        function lireListe(){
            global $pdo;

            $LISTE_JEU = "SELECT * FROM jeu";
            $requeteListeJeux = $pdo->prepare($LISTE_JEU);
            $requeteListeJeux->execute();
            $listeJeu = $requeteListeJeux->fetchAll();
            return $listeJeu;
        }

        function rechercherListe($recherche){
            global $pdo;

            $LISTE_RECHERCHE = "SELECT * FROM jeu WHERE nom LIKE CONCAT('%', :recherche, '%') OR description LIKE CONCAT('%', :recherche, '%') OR editeur LIKE CONCAT('%', :recherche, '%')";
            $requeteListeJeux = $pdo->prepare($LISTE_RECHERCHE);
            $requeteListeJeux->bindParam(':recherche', $recherche, PDO::PARAM_STR);
            $requeteListeJeux->execute();
            $listeJeu = $requeteListeJeux->fetchAll();
            return $listeJeu;
        }

        function lireJeu($idJeu){
            global $pdo;

            $LIRE_JEU= "SELECT * FROM jeu WHERE idjeu = :idJeu";
            $requeteLireJeu = $pdo->prepare($LIRE_JEU);
            $requeteLireJeu->bindParam(":idJeu", $idJeu, PDO::PARAM_INT);
            $requeteLireJeu->execute();
            $jeu = $requeteLireJeu->fetch();
            return $jeu;
        }

        function ajouterJeu($jeu){
            global $pdo;

            $nom = $jeu["nom"];
            $editeur = $jeu["editeur"];
            $description = $jeu["description"];
            $anneePublication = $jeu["date-publication"];
            $cashPrizeMax = $jeu["cash-prize-max"];
            $spectateursMax = $jeu["spectateurs-max"];
            $dernierTournoi = $jeu["dernier-tournoi"];
            
            $SQL_AJOUTER_JEU = "INSERT into jeu(nom, editeur, description, anneePublication, cashPrizeMax, spectateursMax, dernierTournoi) 
            VALUES(:nom, :editeur, :description, :anneePublication, :cashPrizeMax, :spectateursMax, :dernierTournoi)";
            
            $requeteAjouterJeu = $pdo->prepare($SQL_AJOUTER_JEU);
            $requeteAjouterJeu -> bindParam(':nom', $nom, PDO::PARAM_STR);
            $requeteAjouterJeu -> bindParam(':editeur', $editeur, PDO::PARAM_STR);
            $requeteAjouterJeu -> bindParam(':description', $description, PDO::PARAM_STR);
            $requeteAjouterJeu -> bindParam(':anneePublication', $anneePublication, PDO::PARAM_STR);
            $requeteAjouterJeu -> bindParam(':cashPrizeMax', $cashPrizeMax, PDO::PARAM_STR);
            $requeteAjouterJeu -> bindParam(':spectateursMax', $spectateursMax, PDO::PARAM_INT);
            $requeteAjouterJeu -> bindParam(':dernierTournoi', $dernierTournoi, PDO::PARAM_STR);
            $requeteAjouterJeu->execute();
        }

        function modifierJeu($jeu){
            global $pdo;

            $nom = $jeu["nom"];
            $editeur = $jeu["editeur"];
            $description = $jeu["description"];
            $anneePublication = $jeu["date-publication"];
            $cashPrizeMax = $jeu["cash-prize-max"];
            $spectateursMax = $jeu["spectateurs-max"];
            $dernierTournoi = $jeu["dernier-tournoi"];
            $idJeu = $jeu["id"];
            
            $SQL_MODIFIER_JEU = "UPDATE jeu SET nom = :nom, editeur = :editeur, description = :description, 
            anneePublication = :anneePublication, cashPrizeMax = :cashPrizeMax, spectateursMax = :spectateursMax, 
            dernierTournoi = :dernierTournoi WHERE idJeu = :idJeu";
            
            $requeteModifierJeu = $pdo->prepare($SQL_MODIFIER_JEU);
            $requeteModifierJeu -> bindParam(':nom', $nom, PDO::PARAM_STR);
            $requeteModifierJeu -> bindParam(':editeur', $editeur, PDO::PARAM_STR);
            $requeteModifierJeu -> bindParam(':description', $description, PDO::PARAM_STR);
            $requeteModifierJeu -> bindParam(':anneePublication', $anneePublication, PDO::PARAM_STR);
            $requeteModifierJeu -> bindParam(':cashPrizeMax', $cashPrizeMax, PDO::PARAM_STR);
            $requeteModifierJeu -> bindParam(':spectateursMax', $spectateursMax, PDO::PARAM_INT);
            $requeteModifierJeu -> bindParam(':dernierTournoi', $dernierTournoi, PDO::PARAM_STR);
            $requeteModifierJeu -> bindParam(':idJeu', $idJeu, PDO::PARAM_INT);
            $requeteModifierJeu->execute();
        }

        function supprimerJeu($jeu){
            global $pdo;

            $SQL_EFFACER_JEU = "DELETE FROM jeu WHERE idJeu = :idJeu"; 
            $requeteEffacerJeu = $pdo->prepare($SQL_EFFACER_JEU);
            $requeteEffacerJeu -> bindParam(":idJeu", $jeu, PDO::PARAM_INT);
			$requeteEffacerJeu->execute();
        }

        function rechercherSuggestions($recherche){
            global $pdo;
            
            $SQL_RECHERCHER_CORRESPONDANCES  = "SELECT nom AS terme FROM jeu WHERE nom LIKE CONCAT('%', :recherche, '%') UNION SELECT description as terme FROM jeu WHERE description LIKE CONCAT('%', :recherche, '%') UNION SELECT editeur as terme FROM jeu WHERE editeur LIKE CONCAT('%', :recherche, '%')";
            $requeteRechercherSuggestions  = $pdo->prepare($SQL_RECHERCHER_CORRESPONDANCES);
            $requeteRechercherSuggestions->bindParam(':recherche', $recherche, PDO::PARAM_STR);
			$requeteRechercherSuggestions ->execute();
			$suggestions = $requeteRechercherSuggestions ->fetchAll();
			return $suggestions;
		}
    }
?>