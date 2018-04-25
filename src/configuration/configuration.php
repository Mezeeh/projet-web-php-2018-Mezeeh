<?php
	$site = new stdClass();
	
	$site->chemin = new stdClass();
	$site->chemin->racine = $_SERVER['DOCUMENT_ROOT'] . '/eSportHQ/src/';
	$site->chemin->illustration = $site->chemin->racine . 'illustration/';
	$site->chemin->miniature = $site->chemin->racine . 'illustration/miniature/';
	
	$site->url = new stdClass();
	$site->url->racine = 'http://localhost/eSportHQ/src/';
	$site->url->illustration = 'http://localhost/eSportHQ/src/illustration/';
	$site->url->miniature = 'http://localhost/eSportHQ/src/illustration/mini/';
?>