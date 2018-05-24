<?php
	header("Content-Type: application/rss+xml; charset=utf-8");
	
	$idJeu = filter_var($_GET['jeu'], FILTER_VALIDATE_INT);
	require('../accesseur/JeuDAO.php');
	$jeuDAO = new JeuDAO();
	$jeu = $jeuDAO->lireJeu($idJeu);
	//print_r($jeu);
 
    $rssfeed = '<?xml version="1.0" encoding="utf-8"?>';
    $rssfeed .= '<rss version="2.0">';
    $rssfeed .= '<channel>';
    $rssfeed .= '<title>Feed RSS eSportHQ</title>';
    $rssfeed .= '<link>http://149.56.13.19/eSportHQ/</link>';
    $rssfeed .= '<description>Ceci est le feed RSS du site web eSportHQ</description>';
    $rssfeed .= '<language>fr-ca</language>';
    $rssfeed .= '<copyright>Copyright (C) 2009 mywebsite.com</copyright>';
	
	$rssfeed .= '<item>';
	$rssfeed .= '<title>' . utf8_decode($jeu['nom']) . '</title>';
	$rssfeed .= '<description>' . utf8_decode($jeu['description']) . '</description>';
	$rssfeed .= '<link>' . 'http://149.56.13.19/eSportHQ/jeu.php?jeu=' . $jeu['idJeu'] . '</link>';
	$rssfeed .= '</item>';
 
    $rssfeed .= '</channel>';
    $rssfeed .= '</rss>';
 
    echo $rssfeed;
?>