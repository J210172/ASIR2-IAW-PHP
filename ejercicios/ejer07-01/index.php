<?php
	// var_dump($_FILES);
	$target_path = "/uploads/";

	$target_path = $target_path . basename( $_FILES['file']['name']); 

	$moved = move_uploaded_file($_FILES['file']['tmp_name'], $target_path);
	if($moved) {
		echo "<object src='" . basename($_FILES['file']['name'])."'></object>";
	} else{
		echo "There was an error uploading the file, please try again!";
	}
?>
<!DOCTYPE html>
<html>

<head>
	<title>tabla condicional</title>
	<link rel="stylesheet" href="/assets/css/styles.css">
</head>

<body>
	<? $target_path ?? "Nada" ?>
	<img src="$target_path">
	<div class="content middle">
		<h1 class="mt-1">LOGIN</h1>
		<div class="box">
			<form enctype="multipart/form-data" class="d-grid content middle" method="post">
				<div class="input-set">
					<label for="file">Introduce archovo: </label>
					<input type="file" name="file[]" id="file">
				</div>
				<div class="input-set inline">
					<input class="btn primary" type="submit">
					<input class="btn primary-outline" type="reset">
				</div>	
			</form>
		</div>
	</div>
<pre>
EJERCICIO 1

Crea la siguiente función en PHP:

a) Una función (tipo procedimiento, no hay valor devuelto) denominada escribirTresNumeros que reciba tres números enteros como parámetros y proceda a escribir dichos números en tres líneas en un archivo denominado datosEjercicio.txt. Si el archivo no existe, debe crearlo.

b) Crea un fichero html, que incluya un formulario, en el que se pidan 3 números, y al pulsar el botón "Escribir archivo", pase a la página php mostrando el texto "Se ha escrito el archivo", y ejecute la función anterior. 

c) Una función denominada obtenerSuma (tipo función, devolverá un valor numérico) que reciba una ruta de archivo como parámetro, lea los números existentes en cada línea del archivo, y devuelva la suma de todos esos números.

</pre>
</body>

</html>