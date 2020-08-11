<?php
    $colores = [
        ['azul', '#03a',],
        ['rojo', '#d00',],
        ['violeta', '#a3a',],
        ['verde', '#0a3',],
        ['amarillo', '#ff0',],
        ['rosa', '#e99',],
        ['naranja', '#d60',],
        ['marrón', '#500',]
    ]
    
?>



<?php 

 ?>

<?php 

 ?>



<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Colores a tabla</title>
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

    <h1>Muestra de colores</h1>
    <div id="muestras">

<?php 
//-----------------Primera forma---------------------------------------

/*$s = '<table border="1">';
    foreach ( $colores as $color ) {
        $s .= '<tr>';
            foreach ( $color as $codigo ) {
                $s .= '<td>'.$codigo.'</td>';
            }
        $s .= '</tr>';
    }

$s .= '</table>';
echo $s;
*/
//---------------------------------------------------------------------

//----------------------Segunda forma--------------------------------
/*
$s = '<table border="1">';
foreach ( $colores as $color ) {
        $s .= '<tr>';
        foreach ( $color as $codigo ) {
                $s .= '<td>'.$codigo.'</td>';
        }
        $s .= '</tr>';
}
$s .= '</table>';

echo $s;
*/
//---------------------------------------------------------------------

//--------------------Tercera forma----------------------------------

/*echo '<table border="1">';
foreach ( $colores as $color ) {
        echo '<tr>';
        foreach ( $color as $codigo ) {
                echo '<td>'.$codigo.'</td>';
        }
        echo '</tr>';
}
echo '</table>';*/
//---------------------------------------------------------------------
?>
<!--------------------Cuarta forma insertando en HTML------------------>

<table border="1">
<?php
    foreach ( $colores as $color ) {
?>
    <tr>
<?php
    foreach ( $color as $codigo ) {
?>
        <td><?php echo $codigo;?></td>
<?php
    }
?>
    </tr>
<?php
    }
?>

</table>

<!---------------------------------------------------------------------->

    </div>
</body>
</html>