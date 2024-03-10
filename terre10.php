<?php

/************ Nombre premier ************/



$nombre_saisi = 0;


function premierOuNon($nbr) {
	for ($i = 1 ; $i < $nbr ; $i++) { 
		if ($nbr % $i === 0) {
			if ($i === ($nbr - 1)) {
			 	echo "Pas premier !\n";
			 }
		} elseif ($i === ($nbr - 1)) {
			echo "Premier !\n";
		}
	}
}


$nombre_saisi = (int) $argv[1];


//---------Les cas particuliers---------//



//--------------------------------------//

premierOuNon($nombre_saisi);