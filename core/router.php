<?php

class Router {
    protected $routes;

    public function define($routes_list ) {
        $this->routes = $routes_list;
    }

    public function direct($uri){

        if(! array_key_exists($uri, $this->routes)){
            die('404, No url exist!');
        }

        return $this->routes[$uri];
    }
}