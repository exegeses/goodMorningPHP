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
                ];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        body{
            font-family: Helvetica;
            font-size: 1em;
            color: #555;
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
    <h1>Muestra de colores</h1>
    <div id="muestras">

<?php
    $n = 0;
    $cantidad = count($colores);
    while( $n < $cantidad ){
?>
        <span style="
                background-color: <?php echo $codigos[$n] ?>"></span>
            <i style="color: <?php echo $codigos[$n] ?>">
                <?php echo $colores[$n] ?>
            </i>
        <br>
<?php
        $n++;
    }
?>

    </div>

</body>
</html>