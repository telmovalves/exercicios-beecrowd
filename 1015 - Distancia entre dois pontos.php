<?php

    list($x1, $y1) = explode(" ", fgets(STDIN));
    list($x2, $y2) = explode(" ", fgets(STDIN));

    $distancia = sqrt(pow($x2 - $x1, 2) + pow($y2 - $y1, 2));

    echo number_format($distancia, 4, ".", "") . PHP_EOL;

?>