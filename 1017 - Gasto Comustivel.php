<?php

    $tempo = fgets(STDIN);
    $velocidade = fgets(STDIN);

    $distancia = $tempo * $velocidade;

    $quantidadeLitros = $distancia / 12;

    echo number_format($quantidadeLitros, 3, ".", "") . PHP_EOL;

?>