<?php
    //print_r($_GET);
    /* $dateProchainTournoi = filter_var($_GET['dateEvenement'], FILTER_SANITIZE_STRING);

    date_default_timezone_set('Canada/Eastern');

    $tempsRestant = $dateProchainTournoi - time();

    if($tempsRestant > 0){
        $minuteRestant = $tempsRestant / 60;
        $heureRestant = $minuteRestant / 60;
        $jourRestant = $heureRestant / 24;

        $secondeRestant = floor($tempsRestant % 60);
        $minuteRestant = floor($minuteRestant % 60);
        $heureRestant = floor($heureRestant % 24);
        $jourRestant = floor($jourRestant); 
    } else {
        $secondeRestant = 0;
        $minuteRestant = 0;
        $heureRestant = 0;
        $jourRestant = 0; 
    } */

    header("Content-type: text/json");
?>
{
    "dateProchainTournoi": {
                                "joursRestants": "joursRestants",
                                "heuresRestantes": "heuresRestantes",
                                "minutesRestantes": "minutesRestantes",
                                "secondesRestantes": "secondesRestantes"
                            }
}
