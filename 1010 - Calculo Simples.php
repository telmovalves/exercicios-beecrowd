<?php

list($codigo_peca1, $numero_peca1, $valor_unitario1) = explode(' ', fgets(STDIN));

list($codigo_peca2, $numero_peca2, $valor_unitario2) = explode(' ', fgets(STDIN));

$total1 = $numero_peca1 * $valor_unitario1;
$total2 = $numero_peca2 * $valor_unitario2;

$total = $total1 + $total2;

echo "VALOR A PAGAR: R$ " . number_format($total, 2, ".", "") . PHP_EOL;

?>