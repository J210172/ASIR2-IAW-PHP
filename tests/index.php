<?php
    if (isset($_POST['name'])) {
        $name = $_POST['name'];
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios IAW</title>
</head>
<body>
    <h1><?php echo isset($name) ? "Hola $name" : "Anonymous" ?></h1>
    <form action="" method="post">
        <input type="text" placeholder="Escribe tu nombre" name="name" id="name">
        <input type="submit">
    </form>
</body>
</html>