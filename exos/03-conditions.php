<?php

require dirname(__DIR__).'/inc/functions.php';

// ---- Conditions ----
// fiche récap : https://github.com/O-clock-Alumni/fiches-recap/blob/master/php/conditions.md

/* -----------------------------------
a) En utilisant uniquement les variables fournies et les mot-clés if/elseif/else, déterminer laquelle des équipes Yoda+Kenobi ou Dooku+Grievous gagne (les puissances de chacun s'additionnent pour former la puissance de l'équipe).
Si l'équipe Yoda&Kenobi gagne, alors la variable "teamYodaKenobiWins" aura comme valeur "vrai", et la variable "teamDookuGrievousWins" "faux"
Si l'équipe Dooku&Grievous gagne, alors la variable "teamDookuGrievousWins" aura comme valeur "vrai", et la variable "teamYodaKenobiWins" "faux"
*/
$teamYodaKenobiWins = null;
$teamDookuGrievousWins = null;
$puissanceDeYoda = 99.9;
$puissanceDeKenobi = 87;
$puissanceDeDooku = 93;
$puissanceDeGrievous = 92;

// TON CODE ICI



// FIN DE TON CODE
displayExo('conditions-a');
$aOk = checkVariableValue(array('teamYodaKenobiWins'=>true, 'teamDookuGrievousWins'=>false));

/* -----------------------------------
b) Les seigneurs Sith ont leur puissance augmentée de 30% grâce au côté obscur (Seul Dooku est un Sith)
Effectuer à nouveau le test (comme dans "conditions-a") pour déterminer qui sont les vainqueurs désormais
*/
// TON CODE ICI



// FIN DE TON CODE
if (isset($aOk) && $aOk) {
	displayExo('conditions-b');
	$bOk = checkVariableValue(array('teamDookuGrievousWins'=>true, 'teamYodaKenobiWins'=>false));

	displayEnd($bOk);
}

/* BONUS
-----------------------------------
- si ce n'est pas déjà fait, créer les variables "teamJedi" et "teamSith" avec les valeurs de chaque équipe
*/
// TON CODE ICI



// FIN DE TON CODE
if (isset($bOk) && $bOk) {
	displayExo('conditions-bonus');
	$cOk = checkVariableValue(array('teamJedi'=>186.9, 'teamSith'=>212.9));
}
