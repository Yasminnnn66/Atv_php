<?php

$inicio = (int) readline ("Informe o número inicial: ");

$fim = (int) readline ("Informe o número final: ");

$contador = $inicio;

while($contador <= $fim){
    echo "Contador: {$contador}" . PHP_EOL;

    $contador++;
}

