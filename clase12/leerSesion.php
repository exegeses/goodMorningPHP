<?php

    session_start();
    echo $_SESSION['nombre'];
    echo '<pre>';
    var_dump($_SESSION);
    echo '</pre>';

