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


function AprovacaoAluno($nota) {
    if ($nota >= 7) {
        return "Aluno aprovado!";
    } else {
        return "Aluno reprovado!";
    }
}

function ExibirAluno($alunos) {
    foreach ($alunos as $aluno) {
        echo AprovacaoAluno($aluno["nota"]) . PHP_EOL;
        echo "Nome: " . $aluno["nome"] . PHP_EOL;
        echo "Idade: " . $aluno["idade"] . PHP_EOL;
        echo "Curso: " . $aluno["curso"] . PHP_EOL;
        echo "Nota: " . $aluno["nota"] . PHP_EOL;
        echo "=================================" . PHP_EOL;
    }
}

ExibirAluno($alunos);

 