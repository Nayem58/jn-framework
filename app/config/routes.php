<?php

use JetBrains\PhpStorm\NoReturn;

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

function routeToController($uri): void
{
    $controllerPath = CTRLS.$uri;

    // Check for index.php or [URI].php
    $possibleControllers = [
        $controllerPath.'/index.php',
        $controllerPath.'.php',
    ];

    foreach ($possibleControllers as $controller) {
        if (file_exists($controller)) {
            require $controller;

            return;
        }
    }

    // If no controller found, abort
    abort();
}

#[NoReturn] function abort($code = 404): void
{
    http_response_code($code);
    require CTRLS."/{$code}.php";
    exit();
}

routeToController($uri);
