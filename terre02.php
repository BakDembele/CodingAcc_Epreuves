<?php

/****** Afficheur d'arguments ******/

for ($i=1; $i < $argc ; $i++) { 
	echo $argv[$i] . "\n";
}

// -------- Attention ! -------- //

/*    Ne prend pas en argument les points d'interrogation    */

// !!!!! En cours d'amélioration !!!!! //