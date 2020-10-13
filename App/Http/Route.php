<?php

namespace App\Http;

class Route implements RouteInterface
{
    /**
     * @var string
     */
    private $className;

    /**
     * @var string
     */
    private $actionName;

    public function __construct(string $className, string $actionName)
    {
        $this->className = $className;
        $this->actionName = $actionName;
    }

    /**
     * @return string
     */
    public function getClassName(): string
    {
        return $this->className;
    }

    /**
     * @return string
     */
    public function getActionName(): string
    {
        return $this->actionName;
    }
}
