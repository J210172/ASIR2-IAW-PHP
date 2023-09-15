<?php
    $var1 = "Manuel";
    $var2 = "Pepe";
    $var3 = "Juana";

    function saludo($name = "pepe") {
        echo "Hola $name, ¿Como estas?";
    }

    function cuatro_saltos() {
        echo "<br><br><br><br>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        saludo($var3);
        cuatro_saltos();
        saludo("'la palabra pepito'");
        cuatro_saltos();
        saludo($var1);
    ?>
</body>
</html>