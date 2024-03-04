<?php

/************ Inverser une chaîne ************/




$string_saisie = 0;

$tableau_des_caracteres = [];

if ($argc != 2) {
	exit("Nombre d'argument incorrect !!!\n");
}

$string_saisie = $argv[1];



var_dump($string_saisie);
echo "\n";
var_dump($tableau_des_caracteres);
echo "\n";


$tableau_des_caracteres = str_split($string_saisie);



var_dump($tableau_des_caracteres);
echo "\n";



echo count($tableau_des_caracteres);
echo "\n";


for ($i = (count($tableau_des_caracteres) - 1) ; $i >= 0 ; $i--) { 
	echo $tableau_des_caracteres[$i];
}
echo "\n";