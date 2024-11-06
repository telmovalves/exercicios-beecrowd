<?php
    // Recebe o valor da idade em dias
    $idade_em_dias = intval(fgets(STDIN));

    // Calcula o número de anos
    $anos = floor($idade_em_dias / 365);
    $idade_em_dias %= 365;  // Atualiza a quantidade de dias restantes

    // Calcula o número de meses
    $meses = floor($idade_em_dias / 30);
    $idade_em_dias %= 30;  // Atualiza a quantidade de dias restantes

    // O restante são os dias
    $dias = $idade_em_dias;

    // Exibe o resultado
    echo "$anos ano(s)\n";
    echo "$meses mes(es)\n";
    echo "$dias dia(s)\n";
?>