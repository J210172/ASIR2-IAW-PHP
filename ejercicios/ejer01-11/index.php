<?php

$caracter = $_GET['caracter'] ?? null;
$tamano = $_GET['tamano'] ?? null;

?>
<form action="" method="get">      
    <input <?="value='$caracter'"?> name="caracter" id="caracter" placeholder="Introduce in caracter" maxlength="1">
    <label for="tamano">
        <input <?="value='$tamano'"?> type="number" name="tamano" id="tamano">
    </label>
    <input type="submit">
    <button><a href="?">Limpiar</a></button>
</form>

<pre style="font-weight:bold;font-size:2em;font-family:'Comic Sans';color:greenyellow">
<?php 
if ($caracter !== null && $tamano !== null)
{
    for($i = 0; $i < $tamano; $i++) {
        for($j = 0; $j < $tamano; $j++) {
            echo " $caracter";
        }
        echo "\n";
    }
}

?>
</pre>
<pre>
Ejercicio 11

Haz una página que contenga una función denominada cuadrado, que recibe 2 parámetros: un carácter (que puede ser cualquiera) y un número (entero). 
Al llamar a la función, debe mostrar por pantalla un cuadrado con el carácter recibido (tantas filas y columnas como indique el número). 

Ejemplo:  cuadrado("#", 3)
###
###
###

</pre>
