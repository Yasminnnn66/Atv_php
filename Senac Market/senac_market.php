<?php


// Calcula o subtotal de um produto
function calcularSubtotal($preco, $quantidade)
{
    return $preco * $quantidade;
}

// Calcula o desconto de acordo com o valor da compra
function calcularDescontoCompra($valor)
{
    if ($valor >= 1000) {
        return 15;
    } elseif ($valor >= 500) {
        return 10;
    } elseif ($valor >= 200) {
        return 5;
    } else {
        return 0;
    }
}

// Calcula o percentual final de desconto
function calcularDescontoFinal($valor, $tipoCliente, $pagamento, $idade)
{
    $desconto = calcularDescontoCompra($valor);

    if ($tipoCliente == "premium") {
        $desconto = $desconto + 3;
    }

    if ($pagamento == "pix") {
        $desconto = $desconto + 2;
    }

    if ($idade >= 60) {
        $desconto = $desconto + 2;
    }

    return $desconto;
}

// Calcula o valor do desconto
function calcularValorDesconto($valor, $percentual)
{
    return $valor * $percentual / 100;
}

// Classifica a venda
function classificarVenda($valor)
{
    if ($valor < 300) {
        return "VENDA PEQUENA";
    } elseif ($valor < 1000) {
        return "VENDA MÉDIA";
    } else {
        return "VENDA DE ALTO VALOR";
    }
}

// Mostra o comprovante
function mostrarComprovante($id, $data, $cliente, $produtos, $valorBruto, $percentual, $valorDesconto, $valorFinal)
{
    echo "\n";
    echo "========================================\n";
    echo "          SENAC MARKET\n";
    echo "       COMPROVANTE DE VENDA\n";
    echo "========================================\n";

    echo "ID da venda: $id\n";
    echo "Data: $data\n";

    echo "\n--- CLIENTE ---\n";
    echo "Nome: " . $cliente["nome"] . "\n";
    echo "Idade: " . $cliente["idade"] . "\n";
    echo "Tipo: " . $cliente["tipo"] . "\n";
    echo "Pagamento: " . $cliente["pagamento"] . "\n";

    echo "\n--- PRODUTOS ---\n";

    foreach ($produtos as $produto) {

        $subtotal = calcularSubtotal(
            $produto["preco"],
            $produto["quantidade"]
        );

        echo "Nome: " . $produto["nome"] . "\n";
        echo "Categoria: " . $produto["categoria"] . "\n";
        echo "Preço: R$ " . $produto["preco"] . "\n";
        echo "Quantidade: " . $produto["quantidade"] . "\n";
        echo "Subtotal: R$ " . $subtotal . "\n";
        echo "----------------------------------------\n";
    }

    echo "Valor bruto: R$ $valorBruto\n";
    echo "Percentual de desconto: $percentual%\n";
    echo "Valor concedido em desconto: R$ $valorDesconto\n";
    echo "Valor final: R$ $valorFinal\n";

    echo "========================================\n";
}

// Mostra o relatório gerencial
function mostrarRelatorio($produtos, $quantidadeUnidades, $valorBruto, $maisCaro, $maisBarato, $percentual, $valorDesconto, $valorFinal)
{
    echo "\n";
    echo "========================================\n";
    echo "         RELATÓRIO GERENCIAL\n";
    echo "========================================\n";

    echo "Quantidade de produtos diferentes: ";
    echo count($produtos) . "\n";

    echo "Quantidade total de unidades vendidas: ";
    echo $quantidadeUnidades . "\n";

    echo "Produto mais caro: ";
    echo $maisCaro["nome"] . "\n";

    echo "Produto mais barato: ";
    echo $maisBarato["nome"] . "\n";

    echo "Valor bruto: R$ ";
    echo $valorBruto . "\n";

    echo "Percentual de desconto: ";
    echo $percentual . "%\n";

    echo "Valor concedido em desconto: R$ ";
    echo $valorDesconto . "\n";

    echo "Valor final recebido: R$ ";
    echo $valorFinal . "\n";

    echo "Classificação: ";
    echo classificarVenda($valorFinal) . "\n";

    echo "========================================\n";
}


echo "========================================\n";
echo "          SENAC MARKET\n";
echo "========================================\n";

// Identificação da venda
$idVenda = rand(1000, 9999);

// Data da venda
$data = date("d/m/Y");

echo "ID da venda: $idVenda\n";
echo "Data: $data\n";


// =============================
// DADOS DO CLIENTE
// =============================

echo "\n--- DADOS DO CLIENTE ---\n";

$nomeCliente = readline("Nome do cliente: ");

$idade = readline("Idade: ");

do {
    $tipoCliente = readline("Tipo de cliente (comum/premium): ");

    if ($tipoCliente != "comum" && $tipoCliente != "premium") {
        echo "Tipo de cliente inválido. Digite comum ou premium.\n";
    }

} while ($tipoCliente != "comum" && $tipoCliente != "premium");


// =============================
// CADASTRO DOS PRODUTOS
// =============================

$produtos = [];

echo "\n--- CADASTRO DE PRODUTOS ---\n";
echo "Digite ENCERRAR no nome do produto para finalizar.\n";

while (true) {

    $nomeProduto = readline("\nNome do produto: ");

    if ($nomeProduto == "ENCERRAR") {
        break;
    }

    $categoria = readline("Categoria: ");
    $preco = readline("Preço unitário: ");
    $quantidade = readline("Quantidade: ");

    // Verifica se o preço é válido
    if ($preco <= 0) {
        echo "Preço inválido. Produto ignorado.\n";
        continue;
    }

    // Verifica se a quantidade é válida
    if ($quantidade <= 0) {
        echo "Quantidade inválida. Produto ignorado.\n";
        continue;
    }

    // Cria o produto
    $produto = [
        "nome" => $nomeProduto,
        "categoria" => $categoria,
        "preco" => $preco,
        "quantidade" => $quantidade
    ];

    // Adiciona o produto na lista
    $produtos[] = $produto;

    echo "Produto cadastrado!\n";
}


// VERIFICA SE EXISTEM PRODUTO
if (count($produtos) == 0) {

    echo "\nNenhum produto válido foi cadastrado.\n";

} else {

    // FORMA DE PAGAMENTO

    do {

        $pagamento = readline(
            "\nForma de pagamento (pix/cartao/dinheiro): "
        );

        if (
            $pagamento != "pix" &&
            $pagamento != "cartao" &&
            $pagamento != "dinheiro"
        ) {
            echo "Forma de pagamento inválida.\n";
        }

    } while (
        $pagamento != "pix" &&
        $pagamento != "cartao" &&
        $pagamento != "dinheiro"
    );


    // CÁLCULO DOS PRODUTOS

    $quantidadeUnidades = 0;
    $valorBruto = 0;

    // Começa considerando o primeiro produto
    $maisCaro = $produtos[0];
    $maisBarato = $produtos[0];

    foreach ($produtos as $produto) {

        // Calcula o subtotal
        $subtotal = calcularSubtotal(
            $produto["preco"],
            $produto["quantidade"]
        );

        // Soma o subtotal ao valor bruto
        $valorBruto = $valorBruto + $subtotal;

        // Soma as unidades
        $quantidadeUnidades =
            $quantidadeUnidades + $produto["quantidade"];


        // Verifica o produto mais caro
        if ($produto["preco"] > $maisCaro["preco"]) {
            $maisCaro = $produto;
        }

        // Verifica o produto mais barato
        if ($produto["preco"] < $maisBarato["preco"]) {
            $maisBarato = $produto;
        }
    }


    // DESCONTOS

    $percentual = calcularDescontoFinal(
        $valorBruto,
        $tipoCliente,
        $pagamento,
        $idade
    );

    $valorDesconto = calcularValorDesconto(
        $valorBruto,
        $percentual
    );

    $valorFinal = $valorBruto - $valorDesconto;


    // PARCELAMENTO

    if ($pagamento == "cartao") {

        echo "\n--- SIMULAÇÃO DO CARTÃO ---\n";

        for ($parcelas = 1; $parcelas <= 6; $parcelas++) {

            $valorParcela = $valorFinal / $parcelas;

            echo $parcelas . "x de R$ " . $valorParcela . "\n";
        }
    }


    // DADOS DO CLIENTE

    $cliente = [
        "nome" => $nomeCliente,
        "idade" => $idade,
        "tipo" => $tipoCliente,
        "pagamento" => $pagamento
    ];


    // COMPROVANTE

    mostrarComprovante(
        $idVenda,
        $data,
        $cliente,
        $produtos,
        $valorBruto,
        $percentual,
        $valorDesconto,
        $valorFinal
    );


    // RELATÓRIO

    mostrarRelatorio(
        $produtos,
        $quantidadeUnidades,
        $valorBruto,
        $maisCaro,
        $maisBarato,
        $percentual,
        $valorDesconto,
        $valorFinal
    );
}

?>
```
