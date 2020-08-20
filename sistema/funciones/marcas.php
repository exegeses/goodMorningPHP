<?php

    ###########################
    ###### CRUD DE MARCAS #####

    function listarMarcas()
    {
        $link = conectar();
        $sql = "SELECT idMarca, mkNombre
                    FROM marcas";
        $resultado = mysqli_query($link, $sql);
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
        $resultado = mysqli_query($link, $sql);
        return $resultado;
    }

    /*
     * listarMarcas()
     * verMarcaProID()
     * agregarMarca()
     * modificarMarca()
     * eliminarMarca()
     * */