<?php

    //capturar archivo enviado
    $prdImagen = $_FILES['prdImagen'];

    #### veamos que hay en $_FILES
    echo '<pre>';
    print_r($prdImagen);
    echo '</pre>';
    #### que hay en $_FILES


    //subir archivo enviado a directorio
    $dir = 'productos/';
    $tmp = $_FILES['prdImagen']['tmp_name'];
    $nombre = $_FILES['prdImagen']['name'];
    /* nombre en formato timestamp
    $path = pathinfo($_FILES['prdImagen']['name']);
    $nombre = time().'.'.$path['extension'];
    */
    move_uploaded_file( $tmp, $dir.$nombre );
