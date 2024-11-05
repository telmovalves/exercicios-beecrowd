<?php

    $distanciaTotal = fgets(STDIN);
    $combustivelGasto = fgets(STDIN);

    $consumo = $distanciaTotal / $combustivelGasto;

    echo number_format($consumo, 3, ".", "") . " km/l";

?>