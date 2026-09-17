<?php

$contador = 0;
$soma = 0;

$numero = (float) readline("Informe um número: ");

while ($numero != 0) {

    $soma = $soma + $numero;
    $contador++;

    $numero = (float) readline("Informe um número: ");
}

echo "Quantidade de valores: " . $contador . PHP_EOL;
echo "Soma: " . number_format($soma, 2, ',', '.') . PHP_EOL;

if ($contador > 0) {
    $media = $soma / $contador;
    echo "Média: " . number_format($media, 2, ',', '.') . PHP_EOL;
} else {
    echo "Não foi informado nenhum valor válido." . PHP_EOL;
}

?>