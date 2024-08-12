<?php

namespace MyApp;

class Router {
    protected $routes = [];

    public function addRoute($uri, $controller, $method = 'GET') {
        $this->routes[$uri] = ['controller' => $controller, 'method' => $method];
    }

    public function route($uri, $method = 'GET') {
        if (array_key_exists($uri, $this->routes) && $this->routes[$uri]['method'] == $method) {
            return $this->routes[$uri]['controller'];
        }
        return null;
    }
}
