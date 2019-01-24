<?php

require dirname(__DIR__).'/inc/functions.php';

// ---- Variables ----
// fiche récap : https://github.com/O-clock-Alumni/fiches-recap/blob/master/php/syntaxe.md#variables

/* -----------------------------------
a) Créer une variable nommée "toto" avec pour valeur 45
*/
// TON CODE ICI



// FIN DE TON CODE
displayExo('variables-a');
$aOk = checkVariableValue(array('toto'=>45));

/* -----------------------------------
b) créer une variable nommée "tata" avec comme valeur la chaine de caractère "Oclock"
*/
// TON CODE ICI



// FIN DE TON CODE
if (isset($aOk) && $aOk) {
	displayExo('variables-b');
	$bOk = checkVariableValue(array('tata'=>'Oclock'));
}

/* -----------------------------------
c) créer une variable nommée "titi" avec comme valeur le booléen "vrai"
*/
// TON CODE ICI



// FIN DE TON CODE
if (isset($bOk) && $bOk) {
	displayExo('variables-c');
	$cOk = checkVariableValue(array('titi'=>true));
	
	displayEnd($cOk);
}
