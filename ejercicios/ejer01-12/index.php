<?php

$palabra = $_GET['palabra'] ?? null;

?>
<form action="" method="get">
    <label for="palabra">
        <input <?="value='$caracter'"?> name="palabra" id="palabra" placeholder="Introduce una palabra">
    </label>
    <input type="submit">
    <button><a href="?">Limpiar</a></button>
</form>

<?
function contar_caracteres(string $texto, string $caracteres = ""):array {
    preg_replace("[$caracteres]+", "", $texto);
    return count_chars("aeiou");
}

function contarVocales(string $texto) {
    foreach (contar_caracteres($texto, "aeiou") as $vocal => $frec) {
        echo "La vocal '$vocal' aparece '$frec' en el tex.\n";
    }

}
?>
<h2><?= busquedaEntreStrings($contenido, $busqueda, $operacion) ?></h2>

<pre>
Ejercicio 12

Función cuentavocales, que recibe una cadena de texto y muestra por pantalla el número de vocales
totales que tiene la cadena (recuerda: una cadena de textos es un array de caracteres).
</pre>
