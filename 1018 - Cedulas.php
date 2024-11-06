<?php
    // Recebe o valor inteiro
    $valor = intval(fgets(STDIN));

    // Exibe o valor lido
    echo $valor . "\n";

    // Define as cédulas disponíveis
    $notas = [100, 50, 20, 10, 5, 2, 1];

    // Loop para calcular o número de notas de cada valor
    foreach ($notas as $nota) {
        // Calcula quantas notas daquela cédula são necessárias
        $quantidade = intdiv($valor, $nota);
        // Subtrai o valor correspondente a essas notas
        $valor = $valor % $nota;
        // Mostra a quantidade de notas para cada valor
        echo $quantidade . " nota(s) de R$ " . number_format($nota, 2, ",", "") . "\n";
    }

?>