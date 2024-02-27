<?php

/************ L'alphabet à partir de ************/



$alphabet = ["a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"];

// $alphabet = [97, 98, 99, 100, 101, 102, 103, 104, 105, 106, 107, 108, 109, 110, 111, 112, 113, 114, 115, 116, 117, 118, 119, 120, 121, 122];  // De "a" à "z" en code ASCII. 

$lettre_saisie = "a";  // Initialisation de la variable.   //  La lettre tapée en argument du script.

// echo ord($lettre);  // Code ASCII de la lettre tapée en argument du script. 
// echo "\n";

// var_dump($lettre_saisie);




/****** S'assurer que l'argument passé au script soit une lettre unique en minuscule ******/

//----------------------------------------------//

// Si pas d'argument !!!
if ($argc === 1) {
	exit("Veuillez passer un argument au script s'il vous plaît.\n");
}

// Si nbre d'arguments > 2 (1-->nom du script, 2-->1er argument) !!!
if ($argc > 2) {
	exit("Une seule lettre s'il vous plaît. \n");
}


$lettre_saisie = $argv[1];	// Mémorisation de l'argument dans la variable prévue à cet effet. 

// echo strlen($lettre_saisie) . "\n";

// Si l'argument fait plus de 1 caractère !!!
if (strlen($lettre_saisie) > 1) {
	// $lettre_saisie = 0;
	exit("Un seul caractère s'il vous plaît. \n");
}

// Test des caractères autorisés !!!
if (ctype_lower($lettre_saisie)) {
	// return true;
	} else {
		echo "Seuls les caractères de l'alphabet en minuscule sont autorisés. \n";
		exit;
}
//----------------------------------------------//




/****** Comparer cet argument avec les éléments du tableau $alphabet pour trouver son index ******/

//---------------------------------------------//
function findKey() {
	// global $argv;
	global $lettre_saisie;
	// var_dump($lettre_saisie);
	global $alphabet;
	foreach ($alphabet as $key => $lettre) {
		if ($lettre_saisie === $lettre) {
			return $key;
		} //else {
			//echo "Erreur !!!\n";
			//exit;
		//}
	}
}




/****** Afficher à partir de $key ******/

//---------------------------------------------//
function printAlphabetSince() {
	global $alphabet;
	for ($i = findKey(); $i <= 25; $i++) { 
	echo $alphabet[$i];
	}	
}	



/****** !!!!!! Lancement !!!!!! ******/

//---------------------------------------------//

printAlphabetSince();
echo "\n";