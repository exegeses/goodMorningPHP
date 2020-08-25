<?php

    ###########################
    #### CRUD DE PRODUCTOS #####

    function listarProductos()
    {
        $link = conectar();
        $sql = "SELECT 
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

    /*
     * listarProductos()
     * verProductoProID()
     * agregarProducto()
     * modificarProducto()
     * eliminarProducto()
     * */