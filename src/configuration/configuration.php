<?php
	// Config pour l'upload d'une image
	$site = new stdClass();
	
	$site->chemin = new stdClass();
	//$site->chemin->racine = $_SERVER['DOCUMENT_ROOT'] . '/eSportHQ/src/';
	$site->chemin->racine = 'T:\Bitnami\wampstack-7.2.3-0\apache2\htdocs\eSportHQ\src\\';
	//$site->chemin->illustration = $site->chemin->racine . 'illustration/';
	$site->chemin->illustration = $site->chemin->racine . 'illustration\\';
	//$site->chemin->miniature = $site->chemin->racine . 'illustration/miniature/';
	$site->chemin->miniature = $site->chemin->racine . 'illustration\miniature\\';
	
	$site->url = new stdClass();
	$site->url->racine = 'http://localhost/eSportHQ/src/';
	$site->url->illustration = 'http://localhost/eSportHQ/src/illustration/';
	$site->url->miniature = 'http://localhost/eSportHQ/src/illustration/mini/';
	
	// Config pour la traduction
	$traduction = new stdClass();
	$traduction->chemin = $site->chemin->racine . 'locale/';
	$traduction->domaine = 'messages';
	$traduction->locale = 'en_CA.utf8'; // $locale = "en_CA";
	$traduction->locales = ['fr_CA.utf8','en_CA.utf8'];
?>