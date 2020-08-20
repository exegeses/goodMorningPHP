<?php

    //conexión a server + selección de base
    require 'conexion.php';

    print_r($link);

    $sql = "SELECT idCategoria, catNombre
                FROM categorias";
    $resultado = mysqli_query( $link, $sql );

    // informes
    //echo $resultado; no se puede hacer un echo de $resultado
    // debemos recurrir a una fución auxiliar
    //                  mysqli_fetch_assoc()

    while ( $categoria = mysqli_fetch_assoc($resultado) ){
        echo $categoria['idCategoria'];
        echo ' ';
        echo $categoria['catNombre'], '<br>';
    }
