<?php

require dirname(__DIR__).'/inc/functions.php';

// ---- MegaMix des notions du jour ----
// fiche récap : https://github.com/O-clock-Alumni/fiches-recap/

/*
On veut calculer le tarif d'une place de cinéma

TARIF PLEIN : 8,30 €
TARIF REDUIT : 6,80 € (pour +60ans et -16ans)
TARIF ENFANT : 4,50 € (pour -14ans)

SUPPLEMENT 3D : +1 €

*/

/* -----------------------------------
a) Créer une variable nommée "tarifPlein" avec pour valeur 8,3
*/
// TON CODE ICI



// FIN DE TON CODE
displayExo('megamix-a');
$aOk = checkVariableValue(array('tarifPlein'=>8.3));

/* -----------------------------------
b) Créer une variable nommée "tarifReduit" avec pour valeur 6,8
*/
// TON CODE ICI



// FIN DE TON CODE
if (isset($aOk) && $aOk) {
	displayExo('megamix-b');
	$bOk = checkVariableValue(array('tarifReduit'=>6.8));
}

/* -----------------------------------
c) Créer une variable nommée "tarifEnfant" avec pour valeur 4,5
*/
// TON CODE ICI



// FIN DE TON CODE
if (isset($bOk) && $bOk) {
	displayExo('megamix-c');
	$cOk = checkVariableValue(array('tarifEnfant'=>4.5));
}

/* -----------------------------------
d)  - Ecrire les conditions qui vont permettre de connaitre le tarif selon l'âge du client (variable $age)
	- stocker le tarif dans la variable $montant
	- oui il y a du code bizarre qu'on n'a pas vu, mais c'est quelque chose qu'on verra plus tard
*/
function calculTarif($age) {
	global $tarifEnfant, $tarifReduit, $tarifPlein;

	$montant = 0;
	// TON CODE ICI



	// FIN DE TON CODE
	return $montant;
}
if (isset($cOk) && $cOk) {
	displayExo('megamix-d');
	$retourA = calculTarif(25);
	$retourB = calculTarif(15);
	$retourC = calculTarif(10);
	$retourD = calculTarif(61);
	$dOk = checkVariableValue(array('retourA'=>8.3, 'retourB'=>6.8, 'retourD'=>6.8, 'retourC'=>4.5 ));
}

/* -----------------------------------
BONUS
	- récupérer le code de d)
	- le placer dans le code du bonus ci-dessous (copier/coller)
	- ajouter la prise en charge du supplément 3D grâce à la variable $is3D qui serait "vrai" si film en 3D ou "faux" si film en 2D
*/
function calculTarifAvec3D($age, $is3D) {
	global $tarifEnfant, $tarifReduit, $tarifPlein;

	$montant = 0;
	// TON CODE ICI



	// FIN DE TON CODE
	return $montant;
}
if (isset($dOk) && $dOk) {
	displayExo('megamix-BONUS');
	$retourA = calculTarifAvec3D(25, true);
	$retourB = calculTarifAvec3D(25, false);
	$retourC = calculTarifAvec3D(10, true);
	$retourD = calculTarifAvec3D(10, false);
	$retourE = calculTarifAvec3D(61, false);
	$retourF = calculTarifAvec3D(61, true);
	$eOk = checkVariableValue(array('retourA'=>9.3, 'retourB'=>8.3, 'retourC'=>5.5, 'retourD'=>4.5, 'retourE'=>6.8, 'retourF'=>7.8));
}


/* -----------------------------------
MEGA BONUS (de la mort, attention, ça pique ^^)
	- récupérer l'âge du client en argument de la ligne de commande (http://php.net/manual/en/reserved.variables.argv.php)
	- stocker l'âge dans la variable $ageArgv
	- et vérifier visuellement que le montant correspond
*/

// TON CODE ICI



// FIN DE TON CODE


if (isset($eOk) && $eOk) {
	displayExo('megamix-MEGABONUS');
	if (isset($ageArgv)) {
		echo 'Valide toi-meme le montant : '.calculTarif($ageArgv).PHP_EOL;
	}
	else {
		echo 'La variable $ageArgv n\'existe pas'.PHP_EOL;
	}
}