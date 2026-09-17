<?php

$quantidade = (int) readline("Quantidade de alunos: ");

$soma = 0;
$aprovados = 0;
$reprovados = 0;
$maiorNota = 0;
$menorNota = 10;

for ($i = 1; $i <= $quantidade; $i++) {

    $nome = readline("Nome: ");
    $nota = (float) readline("Nota: ");

    $soma = $soma + $nota;

    if ($nota >= 7) {
        $aprovados++;
    } else {
        $reprovados++;
    }

    if ($nota > $maiorNota) {
        $maiorNota = $nota;
    }

    if ($nota < $menorNota) {
        $menorNota = $nota;
    }
}

$media = $soma / $quantidade;

echo PHP_EOL;
echo "Média da turma: " . number_format($media, 2, ',', '.') . PHP_EOL;
echo "Maior nota: " . number_format($maiorNota, 2, ',', '.') . PHP_EOL;
echo "Menor nota: " . number_format($menorNota, 2, ',', '.') . PHP_EOL;
echo "Aprovados: " . $aprovados . PHP_EOL;
echo "Reprovados: " . $reprovados . PHP_EOL;

?>