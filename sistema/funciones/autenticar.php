<?php

    ########################################
    #### AUTH: rutinas a autenticación
    ########################################

    function login()
    {
        $usuEmail = $_POST['usuEmail'];
        $usuPass = $_POST['usuPass'];
        $link = conectar();

        $sql = "SELECT usuNombre, usuApellido
                    FROM usuarios
                    WHERE usuEmail = '".$usuEmail."'
                      AND usuPass = '".$usuPass."'";

        $resultado = mysqli_query( $link, $sql )
                        or die(mysqli_error($link));
        $cantidad = mysqli_num_rows($resultado);

        if( $cantidad == 0 ){
            //redirección a formLogin
            header('location: formLogin.php?error=1');
        }
        else{
            // token de autenticación
            $_SESSION['login'] = 1;
            //redirección a admin
            header('location: admin.php');
        }
    }
    function logout()
    {

    }
    function autenticar()
    {
        if( !isset( $_SESSION['login'] ) ){
            header('location: formLogin.php?error=2');
        }
    }