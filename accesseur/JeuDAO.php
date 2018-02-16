<?php
    require_once "base-de-donnees.php";
    
    class JeuDAO
    {
        function lireListe(){
            global $pdo;

            $requeteListeJeux = $pdo->prepare("SELECT * FROM jeu");
            $requeteListeJeux->execute();
            $listeJeu = $requeteListeJeux->fetchAll();
            return $listeJeu;
        }

        function lireJeu($idJeu){
            global $pdo;

            $LIRE_JEU= "SELECT * FROM jeu WHERE idjeu = :idJeu";
            $requeteLireJeu = $pdo->prepare($LIRE_JEU);
            $requeteLireJeu->bindParam(":idJeu", $idJeu);
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
            
            $SQL_MODIFIER_JEU = "UPDATE jeu SET nom = '".$nom."', editeur = '".$editeur."', description = '".$description."', 
            anneePublication = '".$anneePublication."', cashPrizeMax = '".$cashPrizeMax."', spectateursMax = '".$spectateursMax."', 
            dernierTournoi = '".$dernierTournoi."' WHERE idJeu = " .$idJeu;
            
            $requeteModifierJeu = $pdo->prepare($SQL_MODIFIER_JEU);
            $requeteModifierJeu->execute();
        }

        function supprimerJeu($jeu){
            global $pdo;

            $SQL_EFFACER_JEU = "DELETE FROM jeu WHERE idJeu = " .$_POST["id"];
			
			$requeteEffacerJeu = $pdo->prepare($SQL_EFFACER_JEU);
			$requeteEffacerJeu->execute();
        }
    }
?>