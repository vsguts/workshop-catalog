<?php

namespace App;

use App\Http\RequestInterface;
use App\Http\RouteInterface;
use App\Http\Router;

class Application
{
    /**
     * @var Router
     */
    private $router;

    public function __construct(Router $router)
    {
        $this->router = $router;
    }

    public function handleRequest(RequestInterface $request)
    {
        try {
            $route = $this->router->resolve($request);
            $controller = $this->resolveController($route);
            $action = $this->resolveAction($route, $controller);

            $this->runControllerAction($controller, $action, $request);

        } catch (\Throwable $e) {
            // TODO: logging
            http_response_code('400');
            echo $e->getMessage();
        }
    }

    private function resolveController(RouteInterface $route)
    {
        $className = $route->getClassName();

        if (!class_exists($className)) {
            throw new \Exception('Controller Not found');
        }

        return new $className;
    }

    private function resolveAction(RouteInterface $route, $controller)
    {
        $action = $route->getActionName();

        if (!method_exists($controller, $action)) {
            throw new \Exception('Action nod found');
        }

        return $action;
    }

    private function runControllerAction($controller, $action, RequestInterface $request)
    {
        echo $controller->$action($request);
    }
}
