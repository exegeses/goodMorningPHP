<?php

    ###########################
    ##### CRUD DE USUARIOS #####

    function listarUsuarios()
    {
        $link = conectar();
        $sql = "SELECT idUsuario, usuNombre, usuApellido, usuEmail
                            FROM usuarios
                            WHERE usuEstado = 1";
        $resultado = mysqli_query($link, $sql) or die( mysqli_error($link) );
        return $resultado;
    }

    /*
     * listarUsuarios()
     * verUsuarioProID()
     * agregarUsuario()
     * modificarUsuario()
     * eliminarUsuario()
     * */