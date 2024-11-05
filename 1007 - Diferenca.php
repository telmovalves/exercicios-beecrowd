<?php

$valor = fgets(STDIN);
$valor1 = fgets(STDIN);
$valor2 = fgets(STDIN);
$valor3 = fgets(STDIN);

$dif = $valor * $valor1 - $valor2 * $valor3;

echo "DIFERENCA = " . $dif . PHP_EOL;

?>
