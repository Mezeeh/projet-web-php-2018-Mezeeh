<?php
    session_start();
    if(!empty($_SESSION['membre']['pseudonyme'])){
		echo "Bonjour " . $_SESSION['membre']['prenom'];
        //print_r($_SESSION['membre']);
        echo '<div>
                <a href="mon-compte.php">Mon compte</a>
            </div>';
        echo '<div>
                <a href="action/action-deconnexion.php">Se déconnecter</a>
            </div>';
    }
    else{
        echo '<div>
                <a href="authentification.php">S\'identifier</a>
                |
                <a href="inscription-identification.php">S\'inscrire</a>
            </div>';
    }
?>