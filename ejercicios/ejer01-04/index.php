<?php
    $total_compra = $_GET['total_compra'] ?? 20;
    $tipo_compra = $_GET['tipo_compra'] ?? null;
    $precio_envio = "";
?>

<form action="" method="get">
<input <?= "value='$total_compra'" ?> type="number" name="total_compra" id="total_compra" placeholder="Total de la compra">
    <select name="tipo_compra" id="tipo_compra">
        <option selected disabled>Elije Tipo de compra</option>
        <option <?= $tipo_compra == "ropa" ? "selected" : "" ?> value="ropa">Ropa</option>
        <option <?= $tipo_compra == "mascota" ? "selected" : "" ?> value="mascota">Mascota</option>
    </select>
    <input type="submit">
    <button><a href="?">Limpiar</a></button>
</form>

<?php

if ($total_compra < 19) {
    if ($tipo_compra == "mascota") {
        $precio_envio .= "No se puede realizar el envío<br>";
    }
    if ($tipo_compra == "ropa") {
        $precio_envio .= "Los gastos de envío son 9 euros<br>";
    }
} else {
    if ($total_compra < 40) {
        $precio_envio .= "Los gastos de envío son 9 euros<br>";
    }
}

if ($total_compra > 40) {
    $precio_envio .= "portes de envío son gratis.<br>";
}

if ($total_compra > 200) {
    $precio_envio .= "código de descuento: <b>CODIGODESC33</b><br>";
}
?>
<h4>Precio Total de la compra => <?= $total_compra ?> €</h4>
<h4>Tipo de la compra => <?= $tipo_compra ?? "Ningun tipo selecionado" ?></h4>
<h2 style="margin-bottom: 0">Precio envio:</h2>
<h3 style="margin-left: 20px; margin-top: 0"><?= $precio_envio != "" ? $precio_envio : "Los gastos de envío %ERRRRRR% euros<br>" ?></h3>
<pre>
La tienda online tienda.srcodigofuente.es nos ha pedido una mejora para su web. 
Necesita un tratamiento de la información de la cesta de los clientes que cumpla los siguientes requisitos:

Si la compra del cliente es inferior a 19 euros podrán requerir 2 cosas:
    -si los productos son de mascotas se mostrará un mensaje: "No se puede realizar el envío".
    -si los productos son de ropa se le mostrará el siguiente mensaje: "Los gastos de envío son 9 euros".

Si la compra tiene un importe entre 19 y 40 euros se le indicará el mensaje: "Los gastos de envío son 9 euros".

Si la compra supera los 40 euros deberemos indicar un mensaje de que los portes de envío son gratis.

Si la compra supera los 200 euros deberemos mostrar un mensaje con un código de descuento: CODIGODESC33.

Para este problema disponemos de los siguientes datos:
    El importe total de la cesta de la compra viene en una variable $total_compra con un número decimal positivo. Ejemplo: 33.55.
    En la variable $tipo_compra nos viene un texto que puede ser 'mascotas' o 'ropa'.
    Debemos rellenar una variable $precio_envio para cada una de las posibilidades anteriores.
</pre>