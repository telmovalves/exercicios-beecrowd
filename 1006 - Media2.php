<?php

$valor = floatval(fgets(STDIN));
$valor1 = floatval(fgets(STDIN));
$valor2 = floatval(fgets(STDIN));

$media = ($valor * 2 + $valor1 * 3 + $valor2 * 5) / 10;

echo "MEDIA = " . number_format($media, 1, ".", "") . PHP_EOL; 

?>
