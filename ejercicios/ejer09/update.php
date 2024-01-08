<?php
/* CONFIG */
define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASS", "root");
define("DB_DATABASE", "ejercicio_1");

$link = @mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_DATABASE);

if (!$link)
    die('Connect Error ('.mysqli_connect_errno().') '.mysqli_connect_error());

if (!mysqli_set_charset($link, "utf8"))
    printf("Error loading character set utf8: %s\n", mysqli_error($link));


/* CONNECTION */
if ($_SERVER['REQUEST_METHOD'] == 'POST' || true) {

    $nombre = $_POST['nombre'] ?? null;
    $descripcion = $_POST['descripcion'] ?? '';
    $num_albumes = (int) $_POST['num_albumes'] ?? 0;
    $aragones = isset($_POST['aragones']);
    
    $messages = [];
    $error_messages = [];

    if (empty($nombre)) {
        $error_messages[] = "El nombre de usuario es obligatorio";
    } else {
        $user_exist_query = $link->prepare("SELECT count(*) FROM grupos_musica WHERE nombre = ?");
        $user_exist_query->bind_param('s', $nombre);
        $user_exist_query->execute();
        $user_exist_query->bind_result($num_rows);
        $user_exist_query->fetch();

        if ($num_rows > 0) {
            $error_messages[] = "Ya existe un artista / grupo con ese nombre";
        }

        $user_exist_query->close();
    }

    if (empty($error_messages))
    {
        $query = $link->prepare("INSERT INTO grupos_musica (nombre, descripcion, num_albumes, aragones) VALUES (?, ?, ?, ?)");
        $query->bind_param('ssii', $nombre, $descripcion, $num_albumes, $aragones);

        $query->execute();
        $query->close();
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
    <script src="/assets/js/jquery-3.7.1.min.js"></script>
</head>

<body>
    <div class="messages">
        <?php
            foreach ($error_messages as $message)
                echo "<div class='message error'><button class='btn danger-outline' onclick='this.parentElement.remove()'>x</button><p class='error-message'>$message</p></div>";
            foreach ($messages as $message) {
                echo "                    
                <div class='message success'>
                <button class='close-btn' onclick='this.parentElement.remove()'>x</button>
                <p>$message</p>
                </div>
                ";
            }
        ?>
    </div>
	<div class="content middle">
		<h1 class="mt-1">LOGIN</h1>
		<div class="box">
            <div <?= empty($error_messages) ? 'hidden="hidden"' : '' ?> class="content-75">
                <div class="error-messages">
                    <?php
                        foreach ($error_messages as $message)
                            echo "<p class='error-message'>$message</p>";
                    ?>
                </div>
            </div>
			<form class="d-grid content middle" method="post">
                <div class="input-set">
					<label for="nombre">Nombre del Artista / Grupo: </label>
					<input type="text" name="nombre" id="nombre">
				</div>
				<div class="input-set">
					<label for="descripcion">Descripcion:</label>
                    <textarea name="descripcion" id="descripcion"></textarea>
				</div>
				<div class="input-set">
                    <label for="num_albumes">Numero de albums</label>
                    <input type="number" name="num_albumes" id="num_albumes">
				</div>
				<div class="input-set">
                    <label for="aragones">
                        <input type="checkbox" value="true" name="aragones" id="aragones"> Aragones
                    </label>
				</div>
				<div class="input-set inline">
					<input class="btn primary" type="submit">
					<input class="btn primary-outline" type="reset">
				</div>	
			</form>
		</div>
        <div class="mt-1">
            <table>
                <thead>
                    <tr><th colspan="5">grupos_musica</th></tr>
                    <tr><th>#</th><th>NOMBRE</th><th>DESCRIPCION</th><th>NUMERO DE ALBUMS</th><th>ARAGONES</th></tr>
                </thead>
                <tbody>
                    <?php
                        $user_list_query = $link->query('SELECT * FROM grupos_musica');
                        
                        if ($user_list_query->num_rows == 0) {
                            echo "<tr><td colspan='5'>No hay grupos_musica</td></tr>";
                        }
                        else {
                            while ($user = $user_list_query->fetch_array()) {
                                $color = ($user['aragones'] == 0) ? 'bad': 'good';
                                $aragones = ($user['aragones'] == 0) ? 'No': 'Si';
                                echo "<tr>
                                    <td>{$user['id']}</td>
                                    <td>{$user['nombre']}</td>
                                    <td>{$user['descripcion']}</td>
                                    <td>{$user['num_albumes']}</td>
                                    <td class='$color'>$aragones</td>
                                </tr>";
                            }
                        }
                    ?>
                </tbody>
            </table>
        </div>
	</div>
</body>

</html>

<?php
mysqli_close($link);
?>  