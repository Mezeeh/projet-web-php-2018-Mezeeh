<?php
	/** Le preparer en dernier apres avoir fait tout l'AJAX
	 ** - Permet d'etre certain du format attendu par le JavaScript
	 ** - Permet de ne pas avoir a debugger les 2 technologies en meme temps
	 ** Pointe le navigateur vers le script AVEC les parametres
	 ** Exemple: http://localhost/autocomplete/suggestion.php?recherche=A
	 ** Ou meme sur le source dans Chrome
	 ** view-source:http://localhost/autocomplete/suggestion.php?recherche=A
	 **/

    //print_r($_GET);
	$recherche = $_GET['recherche']; // TODO : filtrer

	// SECTION PREPARATION DES DONNEES
	    
    include "../accesseur/JeuDAO.php";
	$jeuDAO = new JeuDAO();
	$correspondances = $jeuDAO->rechercherCorrespondances($recherche);
	print_r($correspondances);
?>

<ul id="suggestions">
<?php
	// SECTION AFFICHAGE
	
	// foreach sur les donnees recues et generer un li par item
?>

    <li><a href="#" onclick="afficherSuggestion('Alerte')">Alerte</a></li>
    <li><a href="#" onclick="afficherSuggestion('Abeilles')">Abeilles</a></li>
    <li><a href="#" onclick="afficherSuggestion('Accent')">Accent</a></li>
    <li><a href="#" onclick="afficherSuggestion('Avanc&eacute;e')">Avanc&eacute;e</a></li>
</ul>