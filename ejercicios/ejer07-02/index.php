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
	<div class="content middle">
		<? $target_path ?? "Nada" ?>
		<img src="$target_path">
		<h1 class="mt-1">LOGIN</h1>
		<div class="box">
			<form enctype="multipart/form-data" class="content middle" method="post">
				<div class="input-set">
					<label for="file">Introduce archovo: </label>
					<input class="btn" type="file" name="file[]" id="file">
				</div>
				<div class="input-set inline">
					<input class="btn primary" type="submit">
					<input class="btn primary-outline" type="reset">
				</div>	
			</form>
		</div>
		<pre>
EJERCICIO 2

	a) Añade en el fichero PHP del Ejer1, una función (tipo procedimiento >> no hay valor devuelto) denominada leerContenidoFichero que reciba como parámetro la ruta del fichero y muestre por pantalla el contenido de cada una de las líneas del fichero.

	b) En el fichero html del Ejer1, en el que añadas otro formulario (debajo del anterior) Sepáralos con una línea horizontal, y pon las correspondientes caption . Que indiques el nombre del fichero, y al pulsar el botón te  muestre el contenido de cada una de las líneas. 

		</pre>
	</div>
</body>

</html>