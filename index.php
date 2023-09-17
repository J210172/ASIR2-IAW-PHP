<?php
    $root_dir = $_SERVER['DOCUMENT_ROOT'];
    $ejer_dir = "/ejercicios";
    $abs_ejer_dir =  $root_dir . $ejer_dir;

    $content_ejer_dir = scandir($abs_ejer_dir);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios IAW</title>
</head>
<body>
    <ul>
    <?php
        foreach ($content_ejer_dir as $ejer) {
            echo "<li><a alt='URL al ejercicio $ejer' href='/ejercicios/$ejer'>$ejer</a></li>";
        }
    ?>
    </ul>
</body>
</html>