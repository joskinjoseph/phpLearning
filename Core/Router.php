<?php
namespace Core;
use Core\Middleware\Auth;
use Core\Middleware\Guest;

class Router
{
    protected $routes = [];
    public function add($method, $uri, $controller) 
    {
        $this->routes[] = [
            'method' => $method,
            'uri' => $uri,
            'controller' => $controller,
            'middleware' => null
        ];
        return $this;
    }
    public function get($uri, $controller)
    {
       return $this->add('GET', $uri, $controller);
    }
    public function post($uri, $controller)
    {
        return $this->add('POST', $uri, $controller);
    }
    public function delete($uri, $controller)
    {
        return $this->add('DELETE', $uri, $controller);
    }
    public function patch($uri, $controller)
    {
        return $this->add('PATCH', $uri, $controller);
    }
    public function previousUrl(){
        return $_SERVER['HTTP_REFERER'];
    }
    public function put($uri, $controller)
    {
        return $this->add('PUT', $uri, $controller);
    }
    public function only($key){
        $this->routes[array_key_last($this->routes)]['middleware'] = $key;
    }
    public function route($uri, $method)
    {
        foreach ($this->routes as $route){
            if($route['uri'] === $uri && $route['method'] === strtoupper($method)) {
                if($route['middleware'] === "auth") {
                (new Auth)->handle();
                }
                if($route['middleware'] === "guest") {
                (new Guest)->handle();                
                }
                return require base_path('Http/controllers/' . $route['controller']);
            }
        }
        abort();
    }
}



// function routeToController($uri, $routes)
// {
//     if (array_key_exists($uri, $routes)) {
//         require base_path($routes[$uri]);
//     } else {
//         abort(404);
//     }
// }


