<?php

/************ Inverser une chaîne ************/




$string_saisie = 0;

$tableau_des_mots = [];
$tableau_des_caracteres = [];

for ($nombre_de_mots = 1; $nombre_de_mots < $argc ; $nombre_de_mots++) { 
	$tableau_des_mots[] = $argv[$nombre_de_mots];
		
}

var_dump($tableau_des_mots);
echo "\n";