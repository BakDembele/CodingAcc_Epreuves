<?php

/************ Racine carrée d’un nombre ************/

$nombre_saisi = 0;

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

$nombre_saisi = $argv[1];

squareRoot();