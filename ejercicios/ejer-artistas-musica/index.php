<?php
$method = $_SERVER['REQUEST_METHOD'];
var_dump($method);
$path = $_SERVER['PATH_INFO'] ?? "/";
var_dump($path);

require_once 'Controllers/ArtistaController.php';

$routes = [
    "/" => [
        'GET' => (new ArtistaController())->home
    ]
];

if (isset($routes[$path][$method]))
    $routes[$path][$method]();