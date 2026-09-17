<?php

$alunos = [];

$quantidade = (int) readline("Digite a quantidade de alunos: ");

for ($i = 0; $i < $quantidade; $i++) {
    $nome = readline("Digite o nome do aluno ");
    $alunos[] = $nome;
    
}

echo "==============================" . PHP_EOL;
echo "|      LISTA DE ALUNOS       |" . PHP_EOL;
echo "==============================" . PHP_EOL;

foreach ($alunos as $aluno) {
    echo "Aluno: $aluno" . PHP_EOL;
}