<?php

function checkVariableValue($variableList) {
	$retour = true;
	if (is_array($variableList)) {
		foreach ($variableList as $varName=>$expectedValue) {
			if (!array_key_exists($varName, $GLOBALS)) {
				echo 'A toi de jouer...'.PHP_EOL;
				$retour = $retour && false;
			}
			else {
				$var = $GLOBALS[$varName];
				if ($var === $expectedValue) {
					echo '** $'.$varName.' OK **'.PHP_EOL.PHP_EOL;
				}
				else {
					echo 'VARIABLE '.$varName.' = ';
					var_dump($var);
					$retour = $retour && false;
				}
			}
		}
	}
	return $retour;
}

function displayExo($str) {
	echo PHP_EOL.'----------------------------------------'.PHP_EOL;
	echo '|'.str_pad(' EXO '.$str, 38, ' ', STR_PAD_BOTH).'|'.PHP_EOL;
	echo '----------------------------------------'.PHP_EOL.PHP_EOL;
}

function displayEnd($cond) {
    if ($cond === true) {
        echo PHP_EOL.'----------------------------------------'.PHP_EOL;
        echo '|'.str_pad(' EXO TERMINE ! BRAVO !!! ', 38, ' ', STR_PAD_BOTH).'|'.PHP_EOL;
        echo '----------------------------------------'.PHP_EOL.PHP_EOL;
    }
}