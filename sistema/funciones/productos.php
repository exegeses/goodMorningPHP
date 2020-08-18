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
        $resultado = mysqli_query( $link, $sql );
        return $resultado;
    }

    /*
     * listarProductos()
     * verProductoProID()
     * agregarProducto()
     * modificarProducto()
     * eliminarProducto()
     * */