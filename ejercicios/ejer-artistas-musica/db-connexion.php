<?php

define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASS", "root");
define("DB_DATABASE", "ejercicio_1");

function make_connection(): mysqli {
    $mysqli = new mysqli(
        hostname: DB_HOST,
        username: DB_USER,
        password: DB_PASS,
        database: DB_DATABASE
    );


    if (!$mysqli)
        die('Error de connextion ('.mysqli_connect_errno().') '.mysqli_connect_error());

    if (!mysqli_set_charset($mysqli, "utf8"))
        printf("Error cargando el set de caracters utf8: %s\n", mysqli_error($mysqli));

    return $mysqli;
}