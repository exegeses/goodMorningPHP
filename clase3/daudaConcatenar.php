<?php

    $marca = $_POST['marca'];
    $limMenor = $_POST['limMenor'];
    $limMayor = $_POST['limMayor'];

    $sql = "SELECT 
                nombre, marca, modelo, precio
              FROM  autos
              WHERE 
                    marca = ".$marca."
                AND precio BETWEEN ".$limMenor." AND ".$limMayor;

