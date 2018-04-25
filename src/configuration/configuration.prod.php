<?php
	// Config pour l'upload d'une image
	$site = new stdClass();
	
	$site->chemin = new stdClass();
	//$site->chemin->racine = $_SERVER['DOCUMENT_ROOT'] . '/eSportHQ/src/';
	$site->chemin->racine = '/var/www/eSportHQ/';
	//$site->chemin->illustration = $site->chemin->racine . 'illustration/';
	$site->chemin->illustration = $site->chemin->racine . 'illustration\\';
	//$site->chemin->miniature = $site->chemin->racine . 'illustration/miniature/';
	$site->chemin->miniature = $site->chemin->racine . 'illustration\miniature\\';
	
	$site->url = new stdClass();
	$site->url->racine = 'http://149.56.13.19/eSportHQ/';
	$site->url->illustration = 'http://149.56.13.19/eSportHQ/illustration/';
	$site->url->miniature = 'http://149.56.13.19/eSportHQ/src/illustration/mini/';
	
	// Config pour la traduction
	$traduction = new stdClass();
	$traduction->chemin = $site->chemin->racine . 'locale/';
	$traduction->domaine = 'messages';
	$traduction->locale = 'en_CA.utf8'; // $locale = "en_CA";
	$traduction->locales = ['fr_CA.utf8','en_CA.utf8'];
	
	// Preparation pour la traduction
	putenv('LANG=' . $traduction->locale);
	setlocale(LC_MESSAGES, $traduction->locale);
	bindtextdomain($traduction->domaine, $traduction->chemin);
	textdomain($traduction->domaine);
?>