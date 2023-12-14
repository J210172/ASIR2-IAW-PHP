<?php
	function suma(int ...$args) {
		$total = array_sum($args);
		$string = implode($args, " + ");
		echo "$string='$total'";
	}

	$num1 = $_POST['number1'] ?? 0;
	$num2 = $_POST['number2'] ?? 0;
	$num3 = $_POST['number3'] ?? 0;
	
	// suma($num1, $num2, $num3);
?>
<!DOCTYPE html>
<html>

<head>
	<title>tabla condicional</title>
	<link rel="stylesheet" href="/assets/css/styles.css">
</head>

<body>
	<div class="min-h-100 content middle">

		<h1 class="mt-1">LOGIN</h1>
		<div class="box">
		<form class="d-grid content-75 middle" method="post">
			<div class="input-set">
				<label for="number1">Introduce el numero 1: </label>
				<input type="number" name="number1" id="number1">
			</div>
			<div class="input-set">
				<label for="number2">Introduce el numero 2: </label>
				<input type="number" name="number2" id="number2">
			</div>
			<div class="input-set">
				<label for="number3">Introduce el numero 3:</label>
				<input type="number" name="number3" id="number3">
			</div>

			<a href="www" class="btn secondary-outline">Descargar archivo</a>

			<div class="input-set inline">
				<input class="btn primary" type="submit">
				<input class="btn primary-outline" type="reset">
			</div>
		</div>
		<pre style="display: block; max-width: 100%; white-space: pre-wrap;margin-top: auto;">
EJERCICIO 1

Crea la siguiente función en PHP:

	a) Una función (tipo procedimiento, no hay valor devuelto) denominada escribirTresNumeros que reciba tres números enteros como parámetros y proceda a escribir dichos números en tres líneas en un archivo denominado datosEjercicio.txt. Si el archivo no existe, debe crearlo.

	b) Crea un fichero html, que incluya un formulario, en el que se pidan 3 números, y al pulsar el botón "Escribir archivo", pase a la página php mostrando el texto "Se ha escrito el archivo", y ejecute la función anterior. 

	c) Una función denominada obtenerSuma (tipo función, devolverá un valor numérico) que reciba una ruta de archivo como parámetro, lea los números existentes en cada línea del archivo, y devuelva la suma de todos esos números.

		</pre>
	</div>
</body>

</html>