<?php  

    //require 'config/config.php';
    require 'funciones/conexion.php';
    require 'funciones/marcas.php';
        $chequeo = eliminarMarca();
	include 'includes/header.html';
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Baja de una marca</h1>
<?php
        $class = 'danger';
        $mensaje = 'No se pudo eliminar la marca';
        if( $chequeo ) {
            $class = 'success';
            $mensaje = 'Marca eliminada correctamente';
        }
?>
        <div class="alert alert-<?= $class ?>">
            <?= $mensaje ?>
            <br>
            <a href="adminMarcas.php" class="btn btn-outline-secondary">
                volver a panel
            </a>
        </div>

    </main>

<?php  include 'includes/footer.php';  ?>