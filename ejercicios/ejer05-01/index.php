<?php
	include_once './misFunciones.inc.php';
?>
<!DOCTYPE html>
<html>

<head>
	<title>include y require</title>
	<style>
		*, pre {
			background-color: white;
		}

		table * {
			border: 1px solid black;
		}
	</style>
</head>

<body>
	<h1>Hoja 1 Ejer 12</h1>
	<?php include '../ejer01-12/index.php' ?>

	<h1>Hoja 1 Ejer 13</h1>
	<?php include '../ejer01-13/index.php' ?>
	
	<h1>Hoja 2 Ejer 4</h1>
	<?php include '../ejer02-4/index.php' ?>
	
	<h1>Hoja 3 Ejer 1</h1>
	<?php include '../ejer03-1/index.php' ?>
	
	<h1>Hoja 4 Ejer 1</h1>
	<iframe>
		<?php ?>
	</iframe>
		
<pre>
Hoja 5. include y require                                                                                          
																													
Crea un archivo "misFunciones.inc.php" que incluya las funciones de las tareas: 
	> Hoja 1
		- ejer 12
		- ejer 13
	> Hoja 2
		- ejer 4
	> Hoja 3
		- ejer 1
	> Hoja 4
		- ejer 1                                                                     
																												
Crea otro archivo "llamando.php", que incluya el anterior, y muestre el resultado de
esas funciones en el orden indicado, con un título en header2, que diga 
"Probando la función xxxx del ejercicio xxxxx"
</pre>
	
</body>

</html>