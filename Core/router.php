<?php


$routes = require base_path('routes.php');

function routesToController($uri, $routes)
{
    if (array_key_exists($uri, $routes)) {
        require base_path($routes[$uri]);
    } else {
        abort();
    }

}


function abort()
{
    http_response_code($code = 404);

    require "views/{$code}.php";

    die();
}


$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

routesToController($uri, $routes);
