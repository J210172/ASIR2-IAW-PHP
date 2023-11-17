<?php
	$combs=[];
?>
<!DOCTYPE html>
<html>

<head>
	<title>tabla condicional</title>
	<link rel="stylesheet" href="/assets/css/styles.css">
</head>

<body>	
	<div class="content middle">
		<h1 class="mt-1">LOGIN</h1>
		<div class="box ">
			<form class="d-grid content-75 middle" action="post">
				<div class="input-set">
					<label for="username">Introduce tu nick: </label>
					<input type="text" name="username" id="username">
				</div>
				<div class="input-set">
					<label for="email">Introduce tu email: </label>
					<input type="email" name="email" id="email1">
				</div>
				<div class="input-set">
					<label for="passwd1">Introduce tu contraseña:</label>
					<input type="password" name="passwd1" id="passwd1">
				</div>
				<div class="input-set">
					<label for="passwd2">Repite tu contraseña:</label>
					<input type="password" name="passwd2" id="passwd2">
				</div>
				<div class="input-set inline">
					<input class="btn primary" type="submit">
					<input class="btn primary-outline" type="reset">
				</div>	
			</form>
		</div>
	</div>
</body>

</html>