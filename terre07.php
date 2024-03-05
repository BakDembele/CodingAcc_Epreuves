<?php

/************ Taille d'une chaîne ************/


$string_saisie = 0;
$nombre_de_caracteres = 0;
$tableau_des_caracteres = [];

if ($argc != 2) {
	exit("Nombre d'argument incorrect !!!\n");
}


$string_saisie = $argv[1];

if ((mb_ereg("[0-9]", $string_saisie))) {
	exit("Caractères invalides !!!\n");
}

$tableau_des_caracteres = str_split($string_saisie);

foreach ($tableau_des_caracteres as $key => $value) {
	$nombre_de_caracteres += 1;
}

echo $nombre_de_caracteres;
echo "\n";