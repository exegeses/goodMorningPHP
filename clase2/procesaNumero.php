<?php

    $numero = $_POST['numero'];
    $img = 'error';
    if( $numero < 100 ){
        $img = 'ok';
    }
?>
<img src="imagenes/<?php echo $img ?>.png">

