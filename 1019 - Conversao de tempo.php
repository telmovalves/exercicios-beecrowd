<?php
    // Recebe o tempo em segundos
    $segundos = intval(fgets(STDIN));

    // Calcula o número de horas, minutos e segundos
    $horas = intdiv($segundos, 3600); // 1 hora = 3600 segundos
    $segundos_restantes = $segundos % 3600;

    $minutos = intdiv($segundos_restantes, 60); // 1 minuto = 60 segundos
    $segundos_finais = $segundos_restantes % 60;

    // Mostra(imprime) o resultado no formato horas:minutos:segundos
    echo sprintf("%01d:%01d:%01d\n", $horas, $minutos, $segundos_finais);
?>