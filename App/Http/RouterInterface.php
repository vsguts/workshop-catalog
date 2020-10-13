<?php

namespace App\Http;

interface RouterInterface
{
    public function addRoute(string $method, string $path, string $controller, string $action);

    public function resolve(RequestInterface $request) : RouteInterface;
}
