<?php

    // declaración
    function bold( $frase )
    {
        echo '<b>', $frase, '</b><br>';
    }

    /**
     * Función para duplicar un número
     * @param int $num
     */
    function duplicar( $num )
    {
        $resultado = $num * 2;
        return $resultado;
    }

    /**
     * Función para sumar dos números
     * @param $num1
     * @param $num2
     * @return mixed
     */
    function sumar( $num1, $num2 )
    {
        $resultado = $num1 + $num2;
        return $resultado;
    }

    function dividir( $dividendo, $divisor )
    {
        if( $divisor == 0 ){
            return 'El divisor no puede ser 0';
        }
        if(  is_numeric($dividendo) && is_numeric($divisor) ){
            $resultado = $dividendo / $divisor;
            return $resultado;
        }
        else{
            return 'Ambos deben ser números';
        }

    }


    // llamado a ejecución
    bold('texto en negrita');
    bold('PHP y mySQL');
    bold( 25*8 );

    echo '<hr>';
    echo duplicar(12);
    echo '<hr>';

    bold( duplicar(5) ); //10<b></b><br>
    echo '<hr>';
    echo sumar( 5, 18);
    echo '<hr>';
    echo dividir('hola', 10);
    echo '<br>';
    echo dividir(25, 0);
    echo '<br>';
    echo dividir(25, 3.5);

    