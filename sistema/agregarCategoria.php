<?php  

    require 'funciones/conexion.php';
    require 'funciones/categorias.php';
        $chequeo = agregarCategoria();
	include 'includes/header.html';  
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Alta de una categoria</h1>
<?php
    $class = 'danger';
    $mensaje = 'No se pudo agregar la categoría';
    if( $chequeo ) {
        $class = 'success';
        $mensaje = 'Categoría agregada correctamente';
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