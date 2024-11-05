<?php

    list($lado1, $lado2, $lado3) = explode(' ', fgets(STDIN));

    $pi = 3.14159;

    $areaTriangulo = ($lado1 * $lado3) / 2;
    $areaCirculo = $pi * pow($lado3, 2);
    $areaTrapezio = (($lado1 + $lado2) * $lado3) / 2;
    $areaQuadrado = pow($lado2, 2);
    $areaRetangulo = $lado1 * $lado2;
    
    echo "TRIANGULO: " . number_format($areaTriangulo, 3, ".", "") . "\n";
    echo "CIRCULO: " . number_format($areaCirculo, 3, ".", "") . "\n";
    echo "TRAPEZIO: " . number_format($areaTrapezio, 3, ".", "") . "\n";
    echo "QUADRADO: " . number_format($areaQuadrado, 3, ".", "") . "\n";
    echo "RETANGULO: " . number_format($areaRetangulo, 3, ".", "") . "\n";

?>