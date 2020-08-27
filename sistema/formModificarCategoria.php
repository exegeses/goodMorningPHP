<?php  
	
	include 'includes/header.html';  
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Modificación de una categoría</h1>

        <div class="bg-light border p-4">
            <form action="modificarCategoria.php" method="post">
                Categoría: <br>
                <input type="text" name="catNombre" class="form-control">
                <br>
                <button class="btn btn-dark">Agregar categoría</button>
                <a href="adminCategorias.php" class="btn btn-outline-secondary">
                    volver a panel
                </a>
            </form>
        </div>

    </main>

<?php  include 'includes/footer.php';  ?>