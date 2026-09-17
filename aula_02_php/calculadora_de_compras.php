<?php

echo "=====================================================" . PHP_EOL;
echo "             CALCULADORA DE COMPRAS" . PHP_EOL;
echo "=====================================================" . PHP_EOL;

$nomeCliente = readline("Digite o nome do cliente: ");
$produto = readline("Digite o nome do produto: ");
$valorUnitario = (float) readline("Digite o valor do produto: ");
$quantidade = (int) readline("Digite a quantidade do produto: ");
$percentualDesconto = (float) readline("Digite o percentual de desconto: ");
$frete = (float) readline("Digite o valor do frete: ");
$parceria = (float) readline("Digite o valor da parceria: ");

$subtotal = $valorUnitario * $quantidade;
$valorDesconto = $subtotal * ($percentualDesconto / 100);
$totalComDesconto = $subtotal - $valorDesconto;
$totalFinal = $totalComDesconto + $frete + $parceria;

echo PHP_EOL;
echo "=====================================================" . PHP_EOL;
echo "                 RESUMO DA COMPRA" . PHP_EOL;
echo "=====================================================" . PHP_EOL;
echo "Cliente: " . $nomeCliente . PHP_EOL;
echo "Produto: " . $produto . PHP_EOL;
echo "Quantidade: " . $quantidade . PHP_EOL;
echo "Subtotal: R$ " . number_format($subtotal, 2, ',', '.') . PHP_EOL;
echo "Desconto: R$ " . number_format($valorDesconto, 2, ',', '.') . PHP_EOL;
echo "Valor com desconto: R$ " . number_format($totalComDesconto, 2, ',', '.') . PHP_EOL;
echo "Frete: R$ " . number_format($frete, 2, ',', '.') . PHP_EOL;
echo "Parceria: R$ " . number_format($parceria, 2, ',', '.') . PHP_EOL;
echo "TOTAL FINAL: R$ " . number_format($totalFinal, 2, ',', '.') . PHP_EOL;
echo "=====================================================" . PHP_EOL;

