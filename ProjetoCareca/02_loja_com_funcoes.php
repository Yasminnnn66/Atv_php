<?php

function exibirCabecalho()
{
    echo "=============================" . PHP_EOL;
    echo "|         Loja Senac        |" . PHP_EOL;
    echo "=============================" . PHP_EOL;
}

function lerProduto()
{ 
return $produto    = readline("Nome do produto: ");
}
function lerPreco()
{
return $preco      = readline("Valor do produto: ");
}
function lerQuantidade()
{
return $quantidade = readline("Quantidade: ");
}

function calcularTotal($preco, $quantidade)
{
    return $total = $preco * $quantidade;
}

function calcularDesconto($total)
{
    if ($total >= 500)
    {
        return $desconto = $total * 0.10;}

        return  0;
    }
    function exibirResumo($produto, $preco, $quantidade, $total, $desconto){
        $totalFinal = $total - $desconto;

        echo "==============================" . PHP_EOL;
        echo "|      RESUMO DA VENDA       |" . PHP_EOL;    
        echo "==============================" . PHP_EOL;
        echo "Produto: $produto" . PHP_EOL;
        echo "Preço: $preco" . PHP_EOL; 
        echo "Quantidade: $quantidade" . PHP_EOL;
        echo "Total: $total" . PHP_EOL;
        echo "Desconto: $desconto" . PHP_EOL;
        echo "Total Final: $totalFinal" . PHP_EOL;

    }
    exibirCabecalho();
    $produto    = lerProduto();
    $preco      = lerPreco();
    $quantidade = lerQuantidade();
    $total      = calcularTotal($preco, $quantidade);
    $desconto   = calcularDesconto($total);
    exibirResumo($produto, $preco, $quantidade, $total, $desconto);
