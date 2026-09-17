
<?php
echo "===================================================================" . PHP_EOL;
echo "                    SISTEMA VIAGEM SENAC TOUR                      " . PHP_EOL;
echo "===================================================================" . PHP_EOL;


$cliente = readline("Digite o nome do cliente: ");
$origem = readline("Digite a cidade de origem: ");
$destino = readline("Digite a cidade de destino: ");
$viajantes = readline("Digite o número de viajantes: ");
$dias = readline("Digite a quantidade de dias da viagem: ");
$valorDiaria = readline("Digite o valor da diária por pessoa: ");
$valorAlimentacao = readline("Digite o valor da alimentação por pessoa: ");  
$valorTransporte = readline("Digite o valor do transporte: ");
$valorPasseio = readline("Digite o valor do passeio: ");



$totalPassagem = $valorTransporte * $viajantes;
$totalDiaria = $valorDiaria * $viajantes * $dias;
$totalAlimentacao = $valorAlimentacao * $viajantes * $dias;
$totalTransporte = $valorTransporte * $viajantes;
$totalPasseio = $valorPasseio * $viajantes;
$totalViagem = $totalPassagem + $totalDiaria + $totalAlimentacao + $totalTransporte + $totalPasseio;
$valorPorPessoa = $totalViagem / $viajantes;

$valor_teste = "teste";

echo "===================================================================" . PHP_EOL;
echo "                    ORÇAMENTO VIAGEM                             " . PHP_EOL;
echo "===================================================================" . PHP_EOL;
echo "Cliente: " . $cliente . PHP_EOL;
echo "Origem: " . $origem . PHP_EOL;
echo "Destino: " . $destino . PHP_EOL;
echo "Viajantes: " . $viajantes . PHP_EOL;
echo "Dias: " . $dias . PHP_EOL;
echo "Valor da Diária: R$ " . number_format($valorDiaria, 2, ',', '.') . PHP_EOL;
echo "Valor da Alimentação: R$ " . number_format($valorAlimentacao, 2, ',', '.') . PHP_EOL;
echo "Valor do Transporte: R$ " . number_format($valorTransporte, 2, ',', '.') . PHP_EOL;
echo "Valor do Passeio: R$ " . number_format($valorPasseio, 2, ',', '.') . PHP_EOL;
echo "===================================================================" . PHP_EOL;
echo "Total da Viagem: R$ " . number_format($totalViagem, 2, ',', '.') . PHP_EOL;
echo "Valor por Pessoa: R$ " . number_format($valorPorPessoa, 2, ',', '.') . PHP_EOL;
echo "===================================================================" . PHP_EOL;