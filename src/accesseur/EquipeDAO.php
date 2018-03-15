<?php
    include_once "base-de-donnees.php";

    class EquipeDAO{
        function listerEquipes($idJeu){
            global $pdo;

            $LISTER_EQUIPES = "SELECT * FROM equipe WHERE idJeu = " . $idJeu;
            $requeteListerEquipes = $pdo->prepare($LISTER_EQUIPES);
            $requeteListerEquipes->execute();
            return $requeteListerEquipes->fetchAll();
        }

        function lireEquipe($idEquipe){
            global $pdo;
            
            $LIRE_EQUIPE = "SELECT * FROM equipe WHERE idEquipe = $idEquipe";
            $requeteLireEquipe = $pdo->prepare($LIRE_EQUIPE);
            $requeteLireEquipe->execute();
            return $requeteLireEquipe->fetch();
        }

        function ajouterEquipe($equipe){
            global $pdo;

            $AJOUTER_EQUIPE = "INSERT INTO equipe(idJeu, nom, composition) VALUES('".$equipe['idJeu']."','".$equipe['nom']."','".$equipe['composition']."')";
            $requeteAjouterEquipe = $pdo->prepare($AJOUTER_EQUIPE);
            $requeteAjouterEquipe->execute();
        }

        function modifierEquipe($equipe){
            global $pdo;

            $MODIFIER_EQUIPE = "UPDATE equipe SET nom = '".$equipe['nom']."', composition = '".$equipe['composition']."' WHERE idEquipe = '".$equipe['idEquipe']."'";
            $requeteModifierEquipe = $pdo->prepare($MODIFIER_EQUIPE);
            return $requeteModifierEquipe->execute();
        }

        function supprimerEquipe($id){
            global $pdo;

            $SUPPRIMER_EQUIPE = "DELETE FROM equipe WHERE idEquipe = " . $id;
            $requeteSupprimerEquipe = $pdo->prepare($SUPPRIMER_EQUIPE);
            return $requeteSupprimerEquipe->execute();
        }
    }
?>