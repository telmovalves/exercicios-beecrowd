<?php

    $pi = 3.14159;
    $raio = fgets(STDIN);

    $volume = (4/3) * $pi * pow($raio, 3);

    echo "VOLUME = " . number_format($volume, 3, ".", "") . PHP_EOL;    

?>