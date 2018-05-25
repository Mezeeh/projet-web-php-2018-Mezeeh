<?php
/**
 * @package Voyelle voyante
 * @version 1.2
 */
/*
Plugin Name: Voyelle voyante
Plugin URI: http://wordpress.org/plugins/voyelle-voyante/
Description: Une simple extension qui remplace les voyelles par un X en majuscule et le colorie en rose.
Version: 1.2
Author URI: http://voyelle-voyante.com/
*/

function voyelle_separer($contenu){
	$contenu = preg_split("/[aieouAIEOU]/", $contenu);
	
	$contenu = implode('<span class="voyelle">X</span>', $contenu);
	
	return $contenu;
}

add_filter('the_content', 'voyelle_separer');

function voyelle_styliser(){
	echo '<style>';
	include "style.css";
	echo '</style>';
}

add_filter('wp_head', 'voyelle_styliser');
?>
