<?php
    $amigos = ["jose", "pepe"];
    $amigos[] = "alejandro";
    $amigos = [...$amigos, "sergio", "manolo"];
    array_push($amigos,  "luis", "juan");

    $amigos2 = ["felipe", "david"];
    array_push($amigos, ...$amigos2);
    
    $ciudades = ["huesca", "zaragoza", "madrid", "valencia", "sevilla"];

    echo $amigos[0] . " se va de viaje" . "<br>";
    echo $amigos[1] . " se va de viaje a " . $ciudades[0] . "<br>";
    
    shuffle($amigos);
    echo $amigos[0] . " se va de viaje" . "<br>";
    echo $amigos[1] . " se va de viaje a " . $ciudades[0] . "<br>";
?>


<pre>
Ejercicio 2.1

- Guarda en un array los nombres unos amigos.
- Imprime la siguiente frase: “{amigo 1} se va de viaje”.
- Crea otro array con el nombre de varias ciudades.
- Imprime la siguiente frase: “{amigo 2} se va de viaje a {ciudad 1}”

Pro:
    Imprime aleatoriamente el nombre de un amigo.
    Pista shuffle($amigos).

Pro 2:
    Aleatoriamente busca dos nombres y una ciudad para generar la siguiente frase: 
    “{amigo aleatorio} se va de viaje con {amigo aleatorio} a la bonita ciudad de {ciudad aleatoria}.
</pre>

