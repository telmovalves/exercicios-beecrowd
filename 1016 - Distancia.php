<?php

    $velocidadeX = 60;
    $velocidadeY = 90;

    $distancia = fgets(STDIN);

    $diferencaVelocidade = $velocidadeY - $velocidadeX;

    $tempoParaDistancia = $distancia / $diferencaVelocidade * 60;

    echo $tempoParaDistancia . " minutos" . PHP_EOL;

?>