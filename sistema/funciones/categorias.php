<?php

    ###########################
    #### CRUD DE CATEGORIAS ###

    function listarCategorias()
    {
        $link = conectar();
        $sql = "SELECT idCategoria, catNombre
                    FROM categorias";
        $resultado = mysqli_query( $link, $sql );
        return $resultado;
    }

    /*
     * listarCategorias()
     * verCategoriaProID()
     * agregarCategoria()
     * modificarCategoria()
     * eliminarCategoria()
     * */