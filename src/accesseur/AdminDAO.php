<?php
    include_once "base-de-donnees.php";

    class AdminDAO{
        function trouverAdmin($admin){
            global $pdo;

            $TROUVER_ADMIN = "SELECT * FROM admin WHERE pseudonyme = :pseudonyme";
            $requeteTrouverAdmin = $pdo->prepare($TROUVER_ADMIN);
            $requeteTrouverAdmin->bindParam(":pseudonyme", $admin['pseudonyme']);
            $requeteTrouverAdmin->execute();
            $adminTrouve = $requeteTrouverAdmin->fetch();
            //print_r($adminTrouve);
            return $adminTrouve;
        }
    }
?>