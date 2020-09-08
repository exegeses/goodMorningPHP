<?php

    //directiva de sesion
    session_start();

    //registramos variables de sesión
    $_SESSION['nombre'] = 'marcos';
    $_SESSION['numero'] = 666;

    /**
     * datos serializados
     * nombre|s:6:"marcos"; numero|i:666;
    */