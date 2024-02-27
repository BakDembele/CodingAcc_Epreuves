<?php

/************ Pair ou impair ************/


/****** Déclaration des variables ******/

//----------------------------------------------//

$nombre_saisi = 0; 





// Vérification présence d'un argument unique !!!
if ($argc === 1) {
	exit("Veuillez passer un argument au script s'il vous plaît.\n");
}

// Vérification du nombre d'arguments saisis
if ($argc > 2) {
	echo "Un seul argument s'il vous plaît. \n";
	exit;
}

// Affectation
$nombre_saisi = $argv[1];



// echo $nombre_saisi;
// echo "\n";
// var_dump($nombre_saisi);
// echo "\n";
// intval($nombre_saisi);
// var_dump($nombre_saisi);



function isEvenOrOdd() {
	global $nombre_saisi;
	$nombre_saisi = (int) $nombre_saisi;
	if (($nombre_saisi % 2) === 0) {
		echo "Ce nombre est paire. \n";
	} else {
		echo "Ce nombre est impaire. \n";
	}
}



// Vérification si entier
if (is_int($nombre_saisi)) {
	// echo "Ceci est un nombre entier. \n";
	isEvenOrOdd();
} else {
	echo "Ceci n'est pas un nombre entier. \n";
	exit;
}

//----------------------------------------------//
