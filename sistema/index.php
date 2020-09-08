<?php  

    //require 'config/config.php';
    require 'funciones/conexion.php';
    require 'funciones/productos.php';
    $productos = listarProductos();
	include 'includes/header.html';  
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Catálogo de productos</h1>

        <section class="row">

<?php
        while ( $producto = mysqli_fetch_assoc($productos) ){
?>
            <div class="card col-lg-4 col-md-6 col-sm-12">
                <img src="productos/<?= $producto['prdImagen'] ?>" class="card-img-top img-thumbnail">
                <h2><?= $producto['prdNombre'] ?></h2>
                <?= $producto['catNombre'] ?> - <?= $producto['mkNombre'] ?>
                <br>
                $<?= $producto['prdPrecio'] ?>
                <a href="" class="btn btn-outline-info">
                    ver detalle
                </a>
            </div>
<?php
        }
?>

        </section>

    </main>

<?php  include 'includes/footer.php';  ?>