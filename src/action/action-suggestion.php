<?php
	/** Le preparer en dernier apres avoir fait tout l'AJAX
	 ** - Permet d'etre certain du format attendu par le JavaScript
	 ** - Permet de ne pas avoir a debugger les 2 technologies en meme temps
	 ** Pointe le navigateur vers le script AVEC les parametres
	 ** Exemple: http://localhost/autocomplete/suggestion.php?recherche=A
	 ** Ou meme sur le source dans Chrome
	 ** view-source:http://localhost/autocomplete/suggestion.php?recherche=A
	 **/
	// SECTION PREPARATION DES DONNEES
	
	// Se connecter a la base de donnees
	
	
	// Preparer un SQL en utilisant le parametre recupere dans $_GET
	// SELECT champ FROM table WHERE champ LIKE '$recherche%'
	
	
    // Executer la requete et recuperer tous les resultats avec fetchAll() dans une $listeChoix
    

    print_r($_GET);
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