<?php

$contenido = $_GET['contenido'] ?? null;
$busqueda = $_GET['busqueda'] ?? null;
$operacion = $_GET['operacion'] ?? 0;

function busquedaEntreStrings(string $contenido, string $busqueda, int $operacion = 0) {
    return match ($operacion) {
        0 => str_contains($contenido, $busqueda) ? "SÍ está incluído" : "NO está incluído",
        1 => str_starts_with($contenido, $busqueda) ? "SÍ comienza así" : "NO comienza así",
        2 => str_ends_with($contenido, $busqueda) ? "SÍ termina así" : "NO termina así",
        3 => strlen($contenido) > 4 ? substr($contenido, 0, 5) : 
            throw new InvalidArgumentException(
                "La variable \$contnido '$contenido' necesita tener como minimo cinco caracteres", 1),
        default => throw new InvalidArgumentException("La operacion nº: '$operacion' aun no esta disponible", 1),
    };
}
?>

<form action="" method="get">
    <textarea style="width:250px;height:300px" name="contenido" id="contenido" placeholder="Contenido"><?= $contenido ?></textarea>
    <br>
    
    <input <?="value='$busqueda'"?> name="busqueda" id="busqueda" placeholder="Texto a buscar">
    <fieldset>
        <label>
            <input
                id="operacion"
                name="operacion"
                type="radio"
                value="0"
                <?=$operacion == 0 ? "checked" : "" ?>
            >Contiene
        </label><br>
        <label>
            <input
                id="operacion"
                name="operacion"
                type="radio"
                value="1"
                <?=$operacion == 1 ? "checked" : "" ?>
            >Empieza por
        </label><br>
        <label>
            <input
                id="operacion"
                name="operacion"
                type="radio"
                value="2"
                <?=$operacion == 2 ? "checked" : "" ?>
            >Termina por
        </label><br>
        <label>
            <input
                id="operacion"
                name="operacion"
                type="radio"
                value="3"
                <?=$operacion == 3 ? "checked" : "" ?>
            >5 Primeras letras
        </label><br>
    </fieldset>
    <input type="submit">
    <button><a href="?">Limpiar</a></button>
</form>

<h2><?= busquedaEntreStrings($contenido, $busqueda, $operacion) ?></h2>
<h4>Test 1 => <?= busquedaEntreStrings("Érase una vez la vida...", "Érase", 1) ?></h4>
<h4>Test 2 => <?= busquedaEntreStrings("Érase una vez la vida...", "Érase", 3) ?></h4>

<pre>
Ejercicio 10 Función con condicional

Realiza script php, donde se incluya la definición de una función denominada busquedaEntreStrings, a la que se le pasan 3 variables: las dos primeras son string (con nombres str1 y str2), y la tercera es un entero (con nombre tipobusqueda) que nos sirve para saber qué operación se realiza entre las dos anteriores. 

Si la tercera variable es igual a 0:
    Se busca si el contenido de la variable str2 está incluído en str1, 
    y se devuelve el texto "SÍ está incluído" o "NO está incluído"
Si la tercera variable es igual a 1:
    Se busca si la variable str1 comienza con el contenido de la variable str2, 
    y se devuelve el texto "SÍ comienza así" o "NO comienza así"
Si la tercera variable es igual a 2:
    Se busca si la variable str1 termina con el contenido de la variable str2, 
    y se devuelve el texto "SÍ termina así" o "NO termina así"
Si la tercera variable es igual a 3:
    Se corta la variable str2 en el 5º caracter, y se muestra este texto cortado.

A continuación, y una vez definida la función, se llama a la función con los textos: 
1er texto = "Érase una vez la vida..."
2º texto = "Érase"

Y se ejecuta la función con los parámetros 1 y 3. (sólo estos y en este orden)
</pre>
