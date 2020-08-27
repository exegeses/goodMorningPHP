<?php

    ###########################
    #### CRUD DE PRODUCTOS #####

    function listarProductos()
    {
        $link = conectar();
        $sql = "SELECT  
                        idProducto,
                        prdNombre, prdPrecio, 
                        p.idMarca, mkNombre,  
                        p.idCategoria, catNombre,
                        prdPresentacion, prdImagen
	              FROM 
						productos p, marcas m, categorias c
                  WHERE 
						p.idMarca = m.idMarca
                    AND p.idCategoria = c.idCategoria";
        $resultado = mysqli_query( $link, $sql )
                        or die( mysqli_error($link) );
        return $resultado;
    }

    /**
     * subir archivo enviado a directorio productos
     */
    function subirImagen()
    {
        $prdImagen = 'noDisponible.jpg';
        if( $_FILES['prdImagen']['error'] == 0 ){
            $dir = 'productos/';
            $tmp = $_FILES['prdImagen']['tmp_name'];
            $prdImagen = $_FILES['prdImagen']['name'];
            move_uploaded_file( $tmp, $dir.$prdImagen );
        }
        return $prdImagen;
    }

    function agregarProducto()
    {
        $prdNombre = $_POST['prdNombre'];
        $prdPrecio = $_POST['prdPrecio'];
        $idMarca = $_POST['idMarca'];
        $idCategoria = $_POST['idCategoria'];
        $prdPresentacion = $_POST['prdPresentacion'];
        $prdStock = $_POST['prdStock'];
        $prdImagen = subirImagen();
        $link = conectar();
        $sql = "INSERT INTO productos
                    VALUES 
                        (
                        DEFAULT,
                        '".$prdNombre."',  
                        ".$prdPrecio.",
                        ".$idMarca.",
                        ".$idCategoria.",
                        '".$prdPresentacion."',
                        ".$prdStock.",
                        '".$prdImagen."'
                        )";

        $resultado = mysqli_query( $link, $sql )
                            or die(mysqli_error($link));
        return $resultado;
    }

    function verProductoPorID()
    {
        $idProducto = $_GET['idProducto'];
        $link = conectar();
        $sql = "SELECT  
                        idProducto,
                        prdNombre, prdPrecio, 
                        p.idMarca, mkNombre,  
                        p.idCategoria, catNombre,
                        prdPresentacion, prdImagen
	              FROM 
						productos p, marcas m, categorias c
                  WHERE 
						p.idMarca = m.idMarca
                    AND p.idCategoria = c.idCategoria
                    AND idProducto = ".$idProducto;
        $resultado = mysqli_query( $link, $sql )
                        or die( mysqli_error($link) );
        $producto = mysqli_fetch_assoc($resultado);
        return $resultado;
    }

    /*
     * listarProductos()
     * verProductoPorID()
     * agregarProducto()
     * modificarProducto()
     * eliminarProducto()
     * */