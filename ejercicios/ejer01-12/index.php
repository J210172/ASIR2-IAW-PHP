<?php

$texto = $_POST['texto'] ?? null;

?>
<form action="" method="post">
    <label for="palabra">
        <textarea
            name="texto" id="texto"
            placeholder="Introduce el texto donde buscar las vocales"
        ><?= $texto ?></textarea>
    </label>
    <input type="submit">
    <button><a href="?">Limpiar</a></button>
</form>

<?php
function contar_caracteres2(string $texto, string $caracteres = "aeiou"): array {
    $txt = preg_replace("/[^$caracteres]/", "", $texto);
    return count_chars($txt, 1);
}

function contar_caracteres1(string $texto, string $caracteres = "aeiou", bool $noCeros = false, bool $noMayus= true): array {
    $array_caracteres = [];
    
    if ($noMayus) {
        $texto = mb_strtolower($texto);
        $caracteres = mb_strtolower($caracteres);
    }

    foreach (mb_str_split($caracteres) as $c) {
        $array_caracteres[$c] = 0;
    }
    
    foreach (mb_str_split($texto) as $c) {
        if (isset($array_caracteres[$c])) {
            $array_caracteres[$c]++;
        }
    }

    if ($noCeros) {
        $array_caracteres = array_filter(
                $array_caracteres,
                fn($v, $k) => $v != 0,
                ARRAY_FILTER_USE_BOTH
            );
    }

    return $array_caracteres;
}


function contar_caracteres(string $texto, string $caracteres = "aeiou", bool $noCeros = false, bool $noMayus= true): array {
    $array_caracteres = [];
    
    if ($noMayus) {
        $texto = mb_strtolower($texto);
        $caracteres = mb_strtolower($caracteres);
    }

    foreach (mb_str_split($caracteres) as $c) {
        $array_caracteres[$c] = mb_substr_count($texto, $c);
    }

    if ($noCeros) {
        $array_caracteres = array_filter(
                $array_caracteres,
                fn($v, $k) => $v != 0,
                ARRAY_FILTER_USE_BOTH
            );
    }

    $string = Transliterator::create('Any-Latin;')->transliterate("àùìòôöäÍäâÂÄ");

    echo $string;

    return $array_caracteres;
}


function contarVocales(string $texto, $noCeros = false, $noMayus = true) {
    foreach (contar_caracteres($texto, noCeros: $noCeros, noMayus: $noMayus) as $vocal => $frec) {
        echo "La vocal '".$vocal."' aparece '$frec' veces en el texto.<br>";
    }
}
?>
<h2><?= contarVocales("$texto") ?></h2>

<pre>
Ejercicio 12

Función cuentavocales, que recibe una cadena de texto y muestra por pantalla el número de vocales
totales que tiene la cadena (recuerda: una cadena de textos es un array de caracteres).
</pre>
