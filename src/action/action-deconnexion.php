<?php
    session_start();
    session_destroy();
    header('Location: ../index.php');
    //print_r($_SESSION);
?>