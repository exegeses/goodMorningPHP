<?php
    $colores = array(
        array('azul', '#03a'),
        array('rojo', '#d00'),
        array('violeta', '#a3a'),
        array('verde', '#0a3'),
        array('amarillo', '#ff0'),
        array('rosa', '#e99'),
        array('naranja', '#d60'),
        array('marrón', '#500'),
    );
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Colores con 1 Array</title>
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
        <span style= "font-size: 200%;  font-weight: bold; color: <?php echo $colores[$x][1];?>">
        <?php  echo $titulo[$n];?> </span>
        <!-- <?php if($titulo[$n]==" ") echo ' - '; ?> -->

   <?php
                
        $n++; $x++;
        if( $x >7) $x = 0;
     } 
    ?>  


    <h1>Muestra de colores</h1>
    <div id="muestras">
  
    <?php 

        $n = 0;
                
        foreach($colores as $colo) {
                
                foreach($colo as $cod) { ?>
                    
                   <p style= "color: <?php echo $cod;?>">
                    
                <?php } ?>
        
            <span style= "background-color: <?php echo $cod;?>"></span>
            <?php  echo $cod," - (", $colores[$n][0],")";?>
            <br>
            </p>

       <?php $n++; } ?>
    
    </div>

</body>
</html>