<?php
/* CONFIG */

define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASS", "root");
define("DB_DATABASE", "ejercicio_1");

/* CONNECTION */
if ($_SERVER['REQUEST_METHOD'] == 'POST' || true) {

    $username = $_POST['username'] ?? null;
    $passwd1 = $_POST['passwd1'] ?? null;
    $passwd2 = $_POST['passwd2'] ?? null;
    
    $messages = [];
    $error_messages = [];

    if (empty($username))
    {
        $error_messages[] = "El nombre de usuario es obligatorio";
    } 
    
    if (empty($passwd1))
    {
        $error_messages[] = "La contraseña es obligatoria";
    }
    
    if ($passwd1 != $passwd2)
    {
        $error_messages[] = "Las contraseña deben coincidir";
    }

    if (empty($error_messages))
    {
        $link = @mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_DATABASE);
        
        if (!$link)
        die('Connect Error ('.mysqli_connect_errno().') '.mysqli_connect_error());
    
        if (!mysqli_set_charset($link, "utf8"))
        printf("Error loading character set utf8: %s\n", mysqli_error($link));
    
        $query = $link->prepare("INSERT INTO usuarios (username, password) VALUES (?, ?)");
        $query->bind_param('ss', $username, $passwd1);

        $query->execute();
        $query->close();
        
        mysqli_close($link);
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=1920, initial-scale=1.0">
    <title>Ejer 09 - 1</title>
	<link rel="stylesheet" href="/assets/css/styles.css">
</head>

<body>
    <div class="messages">
        <div class="message success">
            <p>Success</p>
        </div>
    </div>
	<div class="content middle">
		<h1 class="mt-1">LOGIN</h1>
		<div class="box ">
            <div <?= empty($error_messages) ? 'hidden="hidden"' : '' ?> class="content-75">
                <div class="error-messages">
                    <?php
                        foreach ($error_messages as $message)
                            echo "<p class='error-message'>$message</p>";
                    ?>
                </div>
            </div>
			<form class="d-grid content-75 middle" method="post">
				<div class="input-set">
					<label for="username">Introduce tu nick: </label>
					<input type="text" name="username" id="username">
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