<?php
use Core\Response;

function dd($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();

}

function urlIs($value) {
    return  $_SERVER['REQUEST_URI'] === $value;
}
function abort($value = 404) {
    http_response_code($code = 404);

    require "views/{$code}.php";

    die();
}

function authorize ($condition){
    if (! $condition) {
        abort(Response::FORBIDDEN);
    }
}
function base_path ($path) {
    return BASE_PATH . $path;
}
function views($path, $attributes = []){
    extract($attributes);
    require base_path('views/' . $path);
}
function redirect($path) {
    header("location: {$path}");
    exit();
}