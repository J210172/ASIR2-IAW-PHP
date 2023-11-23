<style>
    table, table * {
        border: 1px solid black;
    }
</style>

<?php
function calcular_media($array) {
    return array_sum($array) / count($array);
}

$numeros = [11, 22, 33, 44, 55, 66, 77, 88, 99];

for ($i=0;$i<count($numeros);$i++) {echo $numeros[$i];}

echo "Array de numeros: [" . implode(", ", $numeros) . "]<br>";
echo "Media de numeros del array: " . calcular_media($numeros);

?>
<pre>
Ejercicio 2

Escribe una función llamada calcular_media que reciba un array como parámetro de entrada y que devuelva la media de todos los valores que contiene.

</pre>