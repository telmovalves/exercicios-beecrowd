<?php

$nfunc = fgets(STDIN);
$nhorastrab  = fgets(STDIN);
$nvalorhora = doubleval(fgets(STDIN));

$salario = $nhorastrab * $nvalorhora;

echo "NUMBER = " . $nfunc;
echo "SALARY = U$ " . number_format($salario, 2, ".", "") . PHP_EOL;

?>