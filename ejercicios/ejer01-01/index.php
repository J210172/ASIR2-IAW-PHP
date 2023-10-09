<?php
    $var1 = "Hola";
    $var2 = "Mundo";
    $var3 = 1;
    $var4 = 2;
    $var5 = 2.5;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php echo 
    "
    <h1>$var1 $var2</h1>
    </br>
    <h3>Num1: $var3 | Num2: $var4 | Num3: $var5</h3>
    </br>
    ". $var3 + $var4 + $var5 ."
    </br>
    ". $var3 - $var4 - $var5 ."
    </br>
    ". $var3 * $var4 * $var5 ."
    </br>
    ". ($var3 / $var4) ** $var5
    ?>
</body>
</html>