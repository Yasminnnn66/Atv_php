<?php

echo "=====================================================" . PHP_EOL;
echo "             CALCULADORA DE MÉDIA" . PHP_EOL;
echo "=====================================================" . PHP_EOL;

$nomeAluno = readline("Digite o nome do aluno: ");
$nota1 = (float) readline("Digite a primeira nota: ");  
$nota2 = (float) readline("Digite a segunda nota: ");  
$nota3 = (float) readline("Digite a terceira nota: ");  
$nota4 = (float) readline("Digite a quarta nota: ");  

$media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;

echo "================================================" . PHP_EOL;
echo "                 BOLETIM DO ALUNO" . PHP_EOL;
echo "================================================" . PHP_EOL;
echo "Nota 1: $nota1" . PHP_EOL;
echo "Nota 2: $nota2" . PHP_EOL;
echo "Nota 3: $nota3" . PHP_EOL;
echo "Nota 4: $nota4" . PHP_EOL;
echo "================================================" . PHP_EOL;
echo "soma das Notas: " . number_format($nota1 + $nota2 + $nota3 + $nota4, 1, ',', '.') . PHP_EOL;
echo "O aluno $nomeAluno obteve média $media." . PHP_EOL;
echo "================================================" . PHP_EOL;
