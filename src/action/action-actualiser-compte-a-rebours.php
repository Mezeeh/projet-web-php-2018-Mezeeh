<?php
    //print_r($_GET);
    
    date_default_timezone_set('Canada/Eastern');
    
    $dateProchainTournoi = filter_var($_GET['dateEvenement'], FILTER_SANITIZE_STRING);
    $dateProchainTournoi = strtotime($dateProchainTournoi);
    $date = strtotime(date("Y-m-d h:i:s", time()));

    $tempsRestant = $dateProchainTournoi - $date;
    //print_r($tempsRestant);

    if($tempsRestant > 0){
        $minuteRestant = $tempsRestant / 60;
        $heureRestant = $minuteRestant / 60;
        $jourRestant = $heureRestant / 24;
        
        $secondeRestant = floor($tempsRestant % 60);
        $minuteRestant = floor($minuteRestant % 60);
        $heureRestant = floor($heureRestant % 24);
        $jourRestant = floor($jourRestant); 
        
        /* print_r($jourRestant + " ");
        print_r(" ");
        print_r($heureRestant + " ");
        print_r(" ");
        print_r($minuteRestant + " ");
        print_r(" ");
        print_r($secondeRestant + " ");
        print_r(" "); */
    } else {
        $secondeRestant = 0;
        $minuteRestant = 0;
        $heureRestant = 0;
        $jourRestant = 0; 
    } 
    
    header("Content-type: text/json");
?>
{
    "dateProchainTournoi": {
                                "joursRestants": <?=$jourRestant?>,
                                "heuresRestantes": <?=$heureRestant?>,
                                "minutesRestantes": <?=$minuteRestant?>,
                                "secondesRestantes": <?=$secondeRestant?>
                            }
}
