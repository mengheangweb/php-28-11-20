<?php
namespace App\core;

class Router {
    protected $routes;

    public function define($routes_list ) {
        $this->routes = $routes_list;
    }

    public function direct($uri){

        if(! array_key_exists($uri, $this->routes)){
            die('404, No url exist!');
        }

        $explode = explode('@',$this->routes[$uri]);

        $this->callAction(
            ...explode('@',$this->routes[$uri])
        );
    }

    public function callAction($controller, $action)
    {
        $controller = "App\\Controller\\{$controller}";

        return (new $controller)->$action();
    }
}
