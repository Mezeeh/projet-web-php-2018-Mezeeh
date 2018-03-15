<?php
    include_once "base-de-donnees.php";

    class EquipeDAO{
        function listerEquipes($idJeu){
            global $pdo;

            $LISTER_EQUIPES = "SELECT * FROM equipe WHERE idJeu = :idJeu";
            $requeteListerEquipes = $pdo->prepare($LISTER_EQUIPES);
            $requeteListerEquipes->bindParam(":idJeu", $idJeu);
            $requeteListerEquipes->execute();
            return $requeteListerEquipes->fetchAll();
        }

        function lireEquipe($idEquipe){
            global $pdo;
            
            $LIRE_EQUIPE = "SELECT * FROM equipe WHERE idEquipe = :idEquipe";
            $requeteLireEquipe = $pdo->prepare($LIRE_EQUIPE);
            $requeteLireEquipe->bindParam(":idEquipe", $idEquipe);
            $requeteLireEquipe->execute();
            return $requeteLireEquipe->fetch();
        }

        function ajouterEquipe($equipe){
            global $pdo;

            $idJeu = $equipe['idJeu'];
            $nom = $equipe['nom'];
            $composition = $equipe['composition'];

            $AJOUTER_EQUIPE = "INSERT INTO equipe(idJeu, nom, composition) VALUES(:idJeu, :nom, :composition)";
            $requeteAjouterEquipe = $pdo->prepare($AJOUTER_EQUIPE);
            $requeteAjouterEquipe->bindParam(":idJeu", $idJeu, PDO::PARAM_INT);
            $requeteAjouterEquipe->bindParam(":nom", $nom, PDO::PARAM_STR);
            $requeteAjouterEquipe->bindParam(":composition", $composition, PDO::PARAM_STR);
            $requeteAjouterEquipe->execute();
        }

        function modifierEquipe($equipe){
            global $pdo;

            $idEquipe = $equipe['idEquipe'];
            $nom = $equipe['nom'];
            $composition = $equipe['composition'];

            $MODIFIER_EQUIPE = "UPDATE equipe SET nom = :nom, composition = :composition WHERE idEquipe = :idEquipe";
            $requeteModifierEquipe = $pdo->prepare($MODIFIER_EQUIPE);
            $requeteModifierEquipe->bindParam(":nom", $nom, PDO::PARAM_STR);
            $requeteModifierEquipe->bindParam(":composition", $composition,PDO::PARAM_STR);
            $requeteModifierEquipe->bindParam(":idEquipe", $idEquipe, PDO::PARAM_INT);
            return $requeteModifierEquipe->execute();
        }

        function supprimerEquipe($idEquipe){
            global $pdo;

            $SUPPRIMER_EQUIPE = "DELETE FROM equipe WHERE idEquipe = :idEquipe";
            $requeteSupprimerEquipe = $pdo->prepare($SUPPRIMER_EQUIPE);
            $requeteSupprimerEquipe->bindParam(":idEquipe", $idEquipe);
            return $requeteSupprimerEquipe->execute();
        }
    }
?>