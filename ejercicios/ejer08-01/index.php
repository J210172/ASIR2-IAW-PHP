<style>
    table, table * {
        border: 1px solid black;
    }
</style>

<?php
function imprimir_array($array) {
    echo "<table>";
    foreach ($array as $key => $value) echo "<tr><td>$key</td><td>$value</td></tr>";
    echo "<table>";
}

$numeros = ["Mercurio", "Venus", "Tierra", "Marte", "Júpiter"];

imprimir_array($numeros);

?>
<pre>
Ejercicio 1

Escribe una función llamada imprimir_array que reciba un array como parámetro de entrada y muestre
su contenido en una tabla con dos columnas. La primera columna mostrará la posición del array y la
segunda el valor que hay en esa posición.

</pre>
