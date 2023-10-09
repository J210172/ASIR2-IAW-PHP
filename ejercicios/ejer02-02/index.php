<?php

$agenda = array("Dentista a las 12h", "Otra que tú quieras.");

var_dump($agenda);


function test($var1 = "var1", $var2 = "var2") {
    echo "\$var1=$var1; \$var2=$var2";
}

echo test(var2: "world");
?>

<pre>
Ejercicio 2.2.

Crea un array con el nombre agenda.
Añade 2 citas (frases): “Dentista a las 12h” y otra que tú quieras.
Imprime con var_dump.
Te ha surgido un problema: Modifica la cita del Dentista a las 16h.
Imprime con var_dump.
Al final se te ha liado el día: Borra la cita con el Dentista
Imprime con var_dump.
Pro:

En lugar del var_dump, crea una lista desordenada (&lt;ul&gt;). ¡Pista! join().
</pre>