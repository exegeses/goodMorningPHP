<?php  

    //require 'config/config.php';
    require 'funciones/conexion.php';
    require 'funciones/productos.php';
    $producto = verProductoPorID();
	include 'includes/header.html';  
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Confirmación de baja de un producto</h1>

        <div class="card border-danger col-6 mx-auto p-2">
            <div class="row">
                <div class="col">
                    <img src="productos/noDisponible.jpg" class="img-thumbnail">
                </div>
                <div class="col text-danger">
                    <h2><?= $producto['prdNombre'] ?></h2>
                    Categoria: <?= $producto['catNombre'] ?> <br>
                    Marca: <?= $producto['mkNombre'] ?> <br>
                    Presentación: <?= $producto['prdPresentacion'] ?><br>
                    Precio: <span class="lead">
                                $<?= $producto['prdPrecio'] ?>
                            </span>
                    <form action="eliminarProducto.php" method="post">
                        <input type="hidden" name="idProducto"
                               value="<?= $producto['idProducto'] ?>">
                        <button class="btn btn-danger btn-block my-2">
                            Confirmar baja
                        </button>
                        <a href="adminProductos.php" class="btn btn-outline-secondary btn-block">
                            volver a panel
                        </a>
                    </form>

                </div>
            </div>
        </div>

    </main>

<?php  include 'includes/footer.php';  ?>