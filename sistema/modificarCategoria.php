<?php  

    require 'funciones/conexion.php';
    require 'funciones/categorias.php';
        $chequeo = modificarCategoria();
	include 'includes/header.html';  
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Modificación de una categoría</h1>
<?php
    $class = 'danger';
    $mensaje = 'No se pudo modificar la categoría';
    if( $chequeo ) {
        $class = 'success';
        $mensaje = 'Categoría modificada correctamente';
    }
?>
            <div class="alert alert-<?= $class ?>">
                <?= $mensaje ?>
                <br>
                <a href="adminCategorias.php" class="btn btn-outline-secondary">
                    volver a panel
                </a>
            </div>

    </main>

<?php  include 'includes/footer.php';  ?>