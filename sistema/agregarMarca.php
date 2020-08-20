<?php  

    require 'funciones/conexion.php';
    require 'funciones/marcas.php';
        $chequeo = agregarMarca();
	include 'includes/header.html';  
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Alta de una marca</h1>
<?php
    if( $chequeo ){  
?>
            <div class="alert alert-succes">
                Marca agregada correctamente.
                <br>
                <a href="adminMarcas.php" class="btn btn-outline-secondary">
                    volver a panel
                </a>
            </div>
<?php
    } else {
?>
            <div class="alert alert-danger">
                No se pudu agregar la Marca
                <br>
                <a href="adminMarcas.php" class="btn btn-outline-secondary">
                    volver a panel
                </a>
            </div>
<?php
    }
?>
    </main>

<?php  include 'includes/footer.php';  ?>