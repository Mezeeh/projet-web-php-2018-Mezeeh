<?php
    session_start();

    if(empty($_SESSION['membre']) || $_SESSION['membre']['admin'] != 1){
        exit(0);
    }
?>