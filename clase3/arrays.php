<?php

    $num = 5;//int
    $numDec = 7.25;//float
    $frase = 'Hola Mundo';//string
    $Obj = new DateTime(); //Objeto
?>
    <h2>Mostrar un objeto con print_r()</h2>
    <pre><?php print_r($Obj) ?></pre>
<?php
    $marcas = [
                'marolio', 'HP', 'Samsung',
                'Pioneer', 'Audiotechnica', 'Liliana'
            ];//Array
?>
    <h2>Mostrar un array usando print_r()</h2>
    <pre><?php print_r($marcas);?></pre>

<hr>
<?php
    $semana = [
                'Domingo', 'Lunes', 'Martes',
                'Miércoles', 'Jueves', 'Viernes',
                'Sábado'
              ];
    $nDSemana = date('w'); //número del día de la semana
    echo $semana[$nDSemana];
?>
<hr>
<?php
    //$cifras = array( 4, 6, 8, 3, 7, 11 );
    $cifras = [4, 6, 8, 3, 7, 11];
    echo '<pre>';print_r($cifras); echo '</pre>';
?>
<hr>
    <h2>Array asociativo</h2>
<?php
    $celulares = [
                    'Samsung' => 'J7',
                    'Xiomi' => 'MI 9',
                    'Motorolla' => 'G8',
                    'LG' => 'G6',
                    'iPhone' => 'X Plus'
                ];
?>
<pre><?php print_r($celulares);  ?></pre>
<?php
    echo $celulares['Motorolla'];
?>
<hr>
<?php
    $clientes = [
                    'Juan', 'Pérez', 34435654,
                    'Diego', 'Gómez', 41435654,
                    'Pablo', 'García', 29435654
                ];
?>
ver archivo clientes.json
