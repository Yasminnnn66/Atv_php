<?php

echo "exercicio 01" . PHP_EOL;

$num = (int) readline ("Informe um número inteiro maior que zero: ");
if ($num <= 0){
    echo "Número inválido. Por favor, informe um número inteiro maior que zero." . PHP_EOL;
}else{  
    $contador = 1;
    while($contador <= $num){
        echo $contador . PHP_EOL;
        $contador++;
    }
}


