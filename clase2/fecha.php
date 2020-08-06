<?php
    //setlocale(LC_ALL, 'es_ES');

    $diaMes = date('d');
    $mes = date('n');
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

    switch ( $mes ){
        case 1:
            $mes = 'enero';
            break;
        case 2:
            $mes = 'febrero';
            break;
        case 3:
            $mes = 'marzo';
            break;
        case 4:
            $mes = 'abril';
            break;
        case 5:
            $mes = 'mayo';
            break;
        case 6:
            $mes = 'junio';
            break;
        case 7:
            $mes = 'julio';
            break;
        case 8:
            $mes = 'agosto';
            break;
        case 9:
            $mes = 'septiembre';
            break;
        case 10:
            $mes = 'octubre';
            break;
        case 11:
            $mes = 'noviembre';
            break;
        case 12:
            $mes = 'diciembre';
            break;
    }

    echo 'Hoy es ', $diaSemana, ' ', $diaMes, ' de ', $mes, ' de ', $anio;
?>

