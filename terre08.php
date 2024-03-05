<?php

/************ Puissance d'un nombre ************/


$nombre = 0;
$exposant = 0;



/** Fonction **/
function calculerPuissance($nbr, $exp) {
	$resultat = $nbr ** $exp;
	echo $resultat . "\n";
}



// Si pas d'argument !!!
if ($argc === 1) {
	exit("Il manque les 2 nombres attendus ! \n");
}

// Si manque 1 argument !!!
if ($argc === 2) {
	exit("Il manque l'exposant. \n");
}

// Si trop d'arguments !!!
if ($argc > 3) {
	exit("Il y a trop d'arguments, veuillez en saisir 2 s'il vous plaît. \n");
}

// Saisie des arguments !!!
$nombre = $argv[1];
$exposant = $argv[2];



// Si le compte est bon  ET que les caractères sont autorisés !!! 
// PS : Le signe "-" n'étant pas autorisé, l'exposant négatif est donc exclu par REGEX.

if ($argc === 3) {
	if (!(mb_ereg("[^0-9]", $argv[1])) && !(mb_ereg("[^0-9]", $argv[2]))) {
		calculerPuissance($nombre, $exposant);
	} else {
		echo "Caractères invalides !!! \n";
	}
}