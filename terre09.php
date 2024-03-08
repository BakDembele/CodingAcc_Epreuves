<?php

/************ Racine carrée d’un nombre ************/

$nombre_saisi = 0;



/** Fonction **/
//--------------------------------------//
function squareRoot(){
	$nbr = 0;
	$resultat = 0;
	global $nombre_saisi;
	while ($resultat != $nombre_saisi) {
		$nbr++;
		$resultat = $nbr * $nbr;
	}
	echo $nbr . "\n";
}
//--------------------------------------//

// Si pas d'argument !!!
if ($argc === 1) {
	exit("\nVeuillez saisir un nombre s'il vous plaît ! \n\n");
}

$nombre_saisi = $argv[1];


if (!(mb_ereg("[^0-9]", $argv[1]))) { 
	squareRoot();
} else {
	echo "\nCaractères invalides !!! \n\n";
}