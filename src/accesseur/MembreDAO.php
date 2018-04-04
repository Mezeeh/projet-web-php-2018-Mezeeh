<?php
    include_once "base-de-donnees.php";

    class MembreDAO{
        function trouverAdmin($membre){
            global $pdo;

            $TROUVER_MEMBRE = "SELECT * FROM membre WHERE pseudonyme = :pseudonyme";
            $requeteTrouverMembre = $pdo->prepare($TROUVER_MEMBRE);
            $requeteTrouverMembre->bindParam(":pseudonyme", $membre['pseudonyme']);
            $requeteTrouverMembre->execute();
            $membreTrouve = $requeteTrouverMembre->fetch();
            //print_r($membreTrouve);
            return $membreTrouve;
        }
    }
?>