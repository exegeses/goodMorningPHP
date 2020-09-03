<?php

    ###########################
    ###### CRUD DE MARCAS #####

    function listarMarcas()
    {
        $link = conectar();
        $sql = "SELECT idMarca, mkNombre
                    FROM marcas";
        $resultado = mysqli_query($link, $sql)
                        or die( mysqli_error($link) );
        return $resultado;
    }

    function agregarMarca()
    {
        //$mkNombre = checkDato( $_POST['mkNombre'] );
        $mkNombre = $_POST['mkNombre'];
        $link = conectar();
        $sql = "INSERT INTO marcas
                       ( mkNombre )
                    VALUES 
                        ( '".$mkNombre."' )";
        $resultado = mysqli_query($link, $sql)
                        or die( mysqli_error($link) );
        return $resultado;
    }

    function verProductoPorMarca()
    {
        $idMarca = $_POST['idMarca'];
        $link = conectar();
        $sql = "SELECT 1
                    FROM productos
                    WHERE idMarca = ".$idMarca;
        $resultado = mysqli_query( $link, $sql )
                        or die( mysqli_error($link) );
        $cantidad = mysqli_num_rows($resultado);
        return $cantidad;
    }

    /*
     * listarMarcas()
     * verMarcaProID()
     * agregarMarca()
     * modificarMarca()
     * eliminarMarca()
     * */