<?php

$birthday = $_GET['birthday'] ?? '10/12/2010';
$birthday = date_create($birthday);
$age = $birthday->diff(date_create('today'));

echo $birthday->format('c');
?>

<form action="" method="get">
    <input value='<?= $birthday?->format('Y-m-d') ?>' type="date" name="birthday" id="birthday" placeholder="Fecha de nacimiento">
    <input type="submit">
    <button><a href="?">Limpiar</a></button>
</form>

<?php

if ($age->y > 17) {
    echo "<p>puede pasar dentro</p>";
}
if ($age->y > 65) {
    echo "<p>son todos más jóvenes</p>";
}

?>

<pre>
Ejercicio 9 CONDICIONALES

Realiza script PHP que: 
Dada una variable que sea "año de nacimiento": 
· Calcule la edad
· Si es mayor de edad, que diga que "puede pasar dentro"
· Si además de ser mayor de edad, tiene más de 65 años, además de
    decirle que "puede pasar dentro", que le diga además "son todos más jóvenes"
· Si es menor de edad, que no haga nada
</pre>
