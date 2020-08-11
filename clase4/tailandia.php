<?php

	$locacion = ["chinatown",
					"floating-market", 
					"hat-laem",
					"wat-arun",
					"khao-san-road",
					"ko-khai-beach",
					"kwai-river",
					"limestone",
					"longtail-boat",
					"maya-bay",
					"pra-nang",
					"rai-leh-beach",
					"rawai",
					"sirocco",
					"tuk-tuk",
					"wat-saket"
					 ];
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tailandia</title>
	<style type="text/css">
		body{
            font-family: helvetica;
            color: #52BAE0;
            width: 800px;
            margin: auto;
        }
		.contenedor{
			width:100px; 
			padding:5px; 
			margin:2px; 
			float:left; 
			border: 1px solid #ccc;
		}
		h1{padding-left:30px;font-size: 35px}
		h2{font-size: 11px; color: #555;}
	</style>
</head>
<body>

	<h1>Tailandia</h1>

<?php
    $n = 0; //inicio
    $cantidad = count($locacion);
    //inicio de bucle
    while( $n < $cantidad ){
?>
	<article class="contenedor">
        <img src="tailandia/<?= $locacion[$n]; ?>.jpg">
		<br>
		<h2><?= $locacion[$n]; ?></h2>
	</article>
<?php
        $n++;
    }
    //fin de bucle
?>

</body>
</html>

