<?php
    include_once "base-de-donnees.php";

    class AdminDAO{
        function trouverAdmin($admin){
            global $pdo;

            $TROUVER_ADMIN = "SELECT * FROM admin WHERE pseudonyme = '" . $admin['pseudonyme'] . "'";
            $requeteTrouverAdmin = $pdo->prepare($TROUVER_ADMIN);
            $requeteTrouverAdmin->execute();
            $adminTrouve = $requeteTrouverAdmin->fetch();
            //print_r($adminTrouve);
            return $adminTrouve;
        }
    }
?>