<?php

    $colores = [
                    'azul', 'rojo', 'violeta',
                    'verde', 'amarillo', 'rosa',
                    'naranja','marron'
                ];
    $codigos = [
                    '#03a', '#d00', '#a3a',
                    '#0a3', '#ff0', '#e99',
                    '#d60', '#500'

                ]
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Colores con 2 Arrays</title>
    <style>
        body{
            font-family: Helvetica;
            font-size: 1em;
            color: #03a;
            width: 700px;
            margin: auto;
        }
        #muestras{
            border: 1px solid #999;
            padding: 16px 0px 32px 16px;
        }
            #muestras span{
                display: inline-block;
                position: relative;
                top: 11px;
                width: 32px;
                height: 32px;
                margin-right: 12px;
                border: 1px solid #999;
               
            }

    </style>
</head>
<body>

    <?php 

      $titulo = str_split("Muestra de colores");
      $largo = count($titulo);
    
      $n=0;
      $x=0;
      while ( $n < $largo) { 
    ?>
        <span style= "font-size: 200%;  font-weight: bold; color: <?php echo $codigos[$x];?>">
        <?php  echo $titulo[$n];?> </span>
        <?php if($titulo[$n]==" ") echo ' - '; ?>

    <?php
        $cantidad = count($colores);
        if( $x >= $cantidad ) $x = 0;
        $n++;
        $x++;
      }
    ?>    



    <h1>Muestra de colores</h1>
    <div id="muestras">
  
    <?php 

        $cantidad = count($colores);

        $n = 0;
        
        while ($n<$cantidad) {
    
    ?>
            <p style= "color: <?php echo $codigos[$n];?>">     
            <span style= "background-color: <?php echo $codigos[$n];?>"></span>
            <?php  echo $colores[$n];?>
            <br>
            </p>
       
    <?php
            $n++;
       
        }
    ?>
    
    </div>

</body>
</html>