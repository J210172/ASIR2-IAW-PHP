<?php
$censos = [
    "España" => 48345223,
    "Portugal" => 10295000,
    "Francia" => 68000000,
    "Italia" => 60317116,
    "Grecia" => 10741165,
];

var_dump($censos);
sort($censos);
echo "<br>";
var_dump($censos);

?>
<pre>
Crea un diccionario con el censo de población de:
    España, Portugal, Francia, Italia y Grecia. Ayúdate de Wikipedia. 
Ordena de mayor a menor.
    ¡Pista! asort hará el trabajo por ti: asort($censo, SORT_DESC);
Imprime con var_dump.
</pre>