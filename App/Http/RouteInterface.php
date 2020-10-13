<?php

namespace App\Http;

interface RouteInterface
{
    public function __construct(string $className, string $actionName);

    /**
     * @return string
     */
    public function getClassName(): string;

    /**
     * @return string
     */
    public function getActionName(): string;
}
