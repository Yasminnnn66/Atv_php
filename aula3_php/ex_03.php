<?php

$numero = (int) readline("Informe um número: ");

if ($numero <= 0) {
	echo "Número inválido. Informe um número maior que zero." . PHP_EOL;
} else {
	$soma = 0;

	for ($contador = 1; $contador <= $numero; $contador++) {
		$soma += $contador;
	}

	echo "A soma de 1 até {$numero} é {$soma}." . PHP_EOL;
}
