<?php
    session_start();

    include "../accesseur/MembreDAO.php";

    $membreDAO = new MembreDAO();
    $erreur = false;
    $messageErreur = "";

    if(!empty($_POST['action-modication-identite'])){
        // print_r($_POST);

        $filtreMembre = array(
            'prenom' => FILTER_SANITIZE_ENCODED,
            'nom' => FILTER_SANITIZE_ENCODED,
            'courriel' => FILTER_SANITIZE_ENCODED,
            'pseudonyme' => FILTER_SANITIZE_ENCODED,
        );
        
        $identite = filter_var_array($_POST, $filtreMembre);

        if(!empty($identite['prenom']) && !empty($identite['nom']) && !empty($identite['courriel'])){
            $membreDAO->modifierIdentiteMembre($identite);

            $_SESSION["membre"]["prenom"] = $identite["prenom"];
            $_SESSION["membre"]["nom"] = $identite["nom"];
            $_SESSION["membre"]["courriel"] = $identite["courriel"];
        } else {
            $error = true;
            $messageErreur = "Tout les champs doivent être remplit";
        }

    } else if(!empty($_POST['action-modication-securite'])){
        // print_r($_POST);
        
        $filtreMembre = array(
            'motdepasse' => FILTER_SANITIZE_ENCODED,
            'motdepasse-confirmation' => FILTER_SANITIZE_ENCODED,
            'pseudonyme' => FILTER_SANITIZE_ENCODED,
        );
        
        $securite = filter_var_array($_POST, $filtreMembre);

        if(strcmp($securite["motdepasse"],$securite["motdepasse-confirmation"]) == 0){
            $membreDAO->modifierSecuriteMembre($securite);
        } else {
            $error = true;
            $messageErreur = "Les mots de passes ne sont pas identiques";
        }

    } else{
        $error = true;
        $messageErreur = "Action invalide";
    }

    if(!$error){
        echo "Action effectué avec succès";
        header('Location: ../mon-compte.php');
    } else {
        echo $messageErreur;
    }
?>