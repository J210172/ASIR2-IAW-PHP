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
			<form enctype="multipart/form-data" class="d-grid content content middle" method="post">
				<div class="input-set">
					<label for="file">Introduce archovo: </label>
					<input class="btn secondary" type="file" name="file[]" id="file">
				</div>
				<div class="input-set inline">
					<input class="btn primary" type="submit">
					<input class="btn primary-outline" type="reset">
				</div>	
			</form>
		</div>
	</div>
<pre>
	EJERCICIO 3

a) Mejora la función y el formulario del Ejercicio 1, para que puedas indicar el nombre del fichero donde se escriban los 3 números.
</pre>
</body>

</html>