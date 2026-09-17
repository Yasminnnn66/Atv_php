<?php


echo "=============================" . PHP_EOL;
echo "|         Loja Senac        |" . PHP_EOL;
echo "=============================" . PHP_EOL;

/*
Armazenamento de variaveis
-Produto
-Preco
-Quantidade

total = preco*quantidade

Se o valor total for maior ou igual a 500 -> Desconto de 10%
Senao desconto de 0%
totalFinal = valor total - desconto

*/

$produto    = readline("Nome do produto: ");
$preco      = readline("Valor do produto: ");
$quantidade = readline("Quantidade: ");

$total = $preco * $quantidade;

if ($total >= 500)
{
    $desconto = $total * 0.10;
}else{
    $desconto = 0;
}

$totalDesconto = $total - $desconto;

        echo "==============================" . PHP_EOL;
        echo "|      RESUMO DA VENDA       |" . PHP_EOL;
        echo "==============================" . PHP_EOL;
        echo "Produto: $produto" . PHP_EOL; 
        echo "Preço: $preco" . PHP_EOL;
        echo "Quantidade: $quantidade" . PHP_EOL;
        echo "Total: $total" . PHP_EOL;
        echo "Desconto: $desconto" . PHP_EOL;
        echo "Total com Desconto: $totalDesconto" . PHP_EOL;