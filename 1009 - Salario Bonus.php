<?php

$vendedor = trim(fgets(STDIN));
$salarioFixo = floatval(trim(fgets(STDIN)));
$totalVendas = floatval(trim(fgets(STDIN)));

$comissao = 0.15 * $totalVendas;
$totalReceber = $salarioFixo + $comissao;

echo "TOTAL = R$ " . number_format($totalReceber, 2, '.', '') . PHP_EOL;

?>