<?php
    //setlocale(LC_ALL, 'es_ES');

    $diaMes = date('d');
    $mes = date('m');
    $anio = date('Y');
    $diaSemana = date('w');
    if( $diaSemana == 0 ){
        $diaSemana = 'Domingo';
    }
    else if( $diaSemana == 1 ){
        $diaSemana = 'Lunes';
    }
    else if( $diaSemana == 2 ){
        $diaSemana = 'Martes';
    }
    else if( $diaSemana == 3 ){
        $diaSemana = 'Miércoles';
    }
    else if( $diaSemana == 4 ){
        $diaSemana = 'Jueves';
    }
    else if( $diaSemana == 5 ){
        $diaSemana = 'Viernes';
    }
    else{
        $diaSemana = 'Sábado';
    }


    echo $diaSemana, ' ', $diaMes, '/', $mes, '/', $anio;
?>
