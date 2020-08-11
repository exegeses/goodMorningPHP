<?php
    $ingleses = [
                    'Aston Martin',
                    'Vauxhall',
                    'Rolls Royce',
                    'Bentley',
                    'Jaguar',
                    'Lotus',
                    'Cooper',
                    'MG',
                    'Rover',
                    'McLaren',
                    'Marcos'
                ];
    $cantidad = count($ingleses);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    <main class="container">
        <h1>Listado de Autos Ingleses</h1>

        <div class="list-group col-6">
<?php
    for ( $n = 0; $n < $cantidad; $n++ ){
?>            
            <span class="list-group-item list-group-item-action">
                <?= $ingleses[$n]; ?>
            </span>
<?php
    }
?>           
        </div>

    </main>
</body>
</html>