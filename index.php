<?php

$routes = include "./routes.php";

require_once "core/html.php";

HtmlController::new()
	->setTittle('Base Page Test')
	->render();

var_dump($routes);