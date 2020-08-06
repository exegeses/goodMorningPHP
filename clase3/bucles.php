<?php

    $semana = [
        'Domingo', 'Lunes', 'Martes',
        'Miércoles', 'Jueves', 'Viernes',
        'Sábado'
    ];

    $n = 0;
    $cantidad = count($semana);
    while( $n < $cantidad ){
        echo $semana[$n],'<br>';
        $n++; //$n = $n+1;
    }
