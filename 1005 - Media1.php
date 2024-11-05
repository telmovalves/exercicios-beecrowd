<?php

$valor = floatval(fgets(STDIN));
$valor1 = floatval(fgets(STDIN));

$media = ($valor * 3.5 + $valor1 * 7.5) / 11;

echo "MEDIA = " . number_format($media, 5, ".", "") . PHP_EOL; 

?>