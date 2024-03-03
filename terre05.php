<?php

/************ Divisions ************/



/** Déclaration des variables **/
//-----------------------------//

$nombre1 = 0;
$nombre2 = 0;
$quotient = 0;
$reste = 0;

//-----------------------------//



/** Vérification des arguments **/
//-----------------------------//

// Vérification du nombre d'arguments. 
if ($argc != 3) {
	exit("Nombre d'arguments incorrect !\n");
}

//Vérification du type des arguments et conversion. 
if (is_numeric($argv[1]) && is_numeric($argv[2])) {
	$nombre1 = (int) $argv[1];
	$nombre2 = (int) $argv[2];
} else {
	exit("Les arguments doivent être des nombres. \n");
}

// var_dump($nombre1);
// echo "\n";
// var_dump($nombre2);
// echo "\n";
// var_dump($argv);
// echo "\n";
//-----------------------------//


/** Fonction **/
//------------//
function divideAndPrintRemain() {
	global $nombre1;
	global $nombre2;
	global $quotient;
	global $reste;

if (($nombre2 === 0) || ($nombre1 < $nombre2)) {
	exit("Erreur !!!\n");
	} else {
	$quotient = (int) ($nombre1 / $nombre2);
	$reste = $nombre1 % $nombre2;
	echo "Résultat : " . $quotient . "\n";
	echo "Reste : " . $reste . "\n";
	}
}

divideAndPrintRemain();