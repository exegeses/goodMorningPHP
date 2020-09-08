<?php

    session_start();

    //eliminamos una variable de sesion
    unset($_SESSION['numero']);

    //eliminamos TODAS las variables de sesión
    session_unset();

    //eliminamos la sesión
    session_destroy();

