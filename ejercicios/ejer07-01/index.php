<?php
	var_dump($_FILES);
	$target_path = "uploads/";

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
	<style>
		:root {
			--bg-color-1: #383838;
			--bg-color-2: #828282;
			--bg-color-3: #ccc;
			--fg-color-1: #fff;
			--fg-color-2: #eee;
			--fg-color-alt: black;

			--primary-color: blue;
			--secondary-color: darkred;
		

			--border-radius: 8px;
		}

		* {
			color: var(--fg-color-1);
			box-sizing: border-box;
		}

		html,
		body {
			min-height: 100vh;
			background-color: var(--bg-color-1);
			margin: 0!important;
		}

		.content,
		.content-middle {
			max-width: 50vw;
			margin-inline: auto;
		}
		
		.content-middle {
			height: 100vh;
			display: flex;
			flex-direction: column;
			align-items: center;

		}

		.m-auto, .my-auto {
			margin-top: auto;
			margin-bottom: auto;
		}

		.m-auto, .mx-auto {
			margin-left: auto;
			margin-right: auto;
		}

		.mt-1 {
			margin-top: 10%;
		}

		.box {
			min-width: 100%;
			padding: 10px;
			background-color: var(--bg-color-2);
			border-radius: var(--border-radius);
		}

		form.form-block input {
			
		}

		input {
			all: unset;
			color: var(--fg-color-alt);
			background-color: var(--bg-color-3);
			border-radius: var(--border-radius);

		}

		.input-set {
			margin: 10px auto;
			width: auto;
		}
		.input-set label {
			display: block;
		}
		
		.half {
			max-width: 40%;
		}

	</style>
</head>

<body>
	
	<div class="content-middle">
		<h1 class="mt-1">LOGIN</h1>
		<div class="box">
			<form enctype="multipart/form-data" class="d-grid" method="post">
				<div class="input-set">
					<label for="file">Introduce archovo: </label>
					<input type="file" name="file[]" id="file">
				</div>
				<input type="submit"><input type="reset">
			</form>
		</div>
	</div>
</body>

</html>