<?php

namespace App\Http;

class Router implements RouterInterface
{
    private $routes = [];

    public function addRoute(string $method, string $path, string $controller, string $action)
    {
        $this->routes[$method][$path] = new Route($controller, $action);
    }

    public function resolve(RequestInterface $request) : RouteInterface
    {
        $method = $request->getMethod();
        $path = $request->getPath();

        if (empty($this->routes[$method][$path])) {
            throw new \Exception('Not found');
        }

        return $this->routes[$method][$path];
    }
}
