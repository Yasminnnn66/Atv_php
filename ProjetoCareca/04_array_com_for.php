<?php

$alunos = [];

$quantidade = (int) readline("Digite a quantidade de alunos: ");

for ($i = 0; $i < $quantidade; $i++) {
    $nome = readline("Digite o nome do aluno ");
    $alunos[] = $nome;
    
}