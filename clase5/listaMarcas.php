<?php
    require 'conexion.php';

    $sql = "SELECT idMarca, mkNombre
                FROM marcas";
    $resultado = mysqli_query( $link, $sql );
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>listado de Marcas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    <main class="container">
        <h1>listado de marcas</h1>

        <section class="list-group">
<?php
        while( $marca = mysqli_fetch_assoc($resultado) ){
?>
            <span class="list-group-item list-group-item-action">
                <?= $marca['mkNombre'] ?>
            </span>
<?php
        }
?>
        </section>

    </main>

</body>
</html>
