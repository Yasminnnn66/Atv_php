<?php
$alunos = [
    [
        "nome" => "Miriam",
        "idade" => 15,
        "curso" => "Informática",
        "nota" => 9.5
    ],
    [
    
        "nome" => "Adson",
        "idade" => 16,
        "curso" => "ADS",
        "nota" => 5.7
    ]
];
 
 
 
foreach ($alunos as $aluno) {
    if ($aluno["nota"] >= 7) {
        echo "Aluno aprovado!" . PHP_EOL;
    } else {
        echo "Aluno reprovado!" . PHP_EOL;
    }
    echo "Nome: " . $aluno["nome"] . PHP_EOL;
    echo "Idade: " . $aluno["idade"] . PHP_EOL;
    echo "Curso: " . $aluno["curso"] . PHP_EOL;
    echo "Nota: " . $aluno["nota"] . PHP_EOL;
    echo "=================================" . PHP_EOL;
}