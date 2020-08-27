<?php

    ###########################
    #### CRUD DE CATEGORIAS ###

    function listarCategorias()
    {
        $link = conectar();
        $sql = "SELECT idCategoria, catNombre
                    FROM categorias";
        $resultado = mysqli_query( $link, $sql )
                        or die( mysqli_error($link) );
        return $resultado;
    }

    function verCategoriaPorID()
    {
        $idCategoria = $_GET['idCategoria'];
        $link = conectar();
        $sql = "SELECT idCategoria, catNombre 
                    FROM categorias
                    WHERE idCategoria = ".$idCategoria;
        $resultado = mysqli_query($link, $sql)
                            or die( mysqli_error($link) );
        $categoria = mysqli_fetch_assoc($resultado);
        return $categoria;
    }

    /*
     * listarCategorias()
     * verCategoriaProID()
     * agregarCategoria()
     * modificarCategoria()
     * eliminarCategoria()
     * */