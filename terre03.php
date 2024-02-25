<?php

/************ L'alphabet à partir de ************/







$alphabet = ["a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"];


// $alphabet = [97, 98, 99, 100, 101, 102, 103, 104, 105, 106, 107, 108, 109, 110, 111, 112, 113, 114, 115, 116, 117, 118, 119, 120, 121, 122];  // De "a" à "z" en code ASCII. 

$lettre_saisie = $argv[1];  //  La lettre tapée en argument du script.

// echo ord($lettre);  // Code ASCII de la lettre tapée en argument du script. 
// echo "\n";




	/*** S'assurer que l'argument passé au script soit une lettre unique en minuscule ***/

if ($argc > 2) {
	echo "Une seule lettre s'il vous plaît. \n";
}








	/*** Comparer cet argument avec les éléments du tableau $alphabet pour trouver son index ***/

//---------------------------------------------//
function findKey(){
	global $alphabet;
	foreach ($alphabet as $key => $lettre) {
		global $lettre_saisie;
		if ($lettre_saisie === $lettre) {
			return $key;
		}
	}
}
//---------------------------------------------//
// echo findKey();

// echo "\n";
//---------------------------------------------//




	/*** Afficher à partir de $key ***/

//---------------------------------------------//
for ($i = findKey(); $i <= 25; $i++) { 
	echo $alphabet[$i];
}

echo "\n";

//----------------------------------------------//

