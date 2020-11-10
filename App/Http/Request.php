<?php

namespace App\Http;

class Request implements RequestInterface
{
    public function getMethod()
    {
        return $_SERVER['REQUEST_METHOD'];
    }

    public function getPath()
    {
        return explode('?', $_SERVER['REQUEST_URI'])[0];
    }

    public function getParams()
    {
        return $_GET;
    }
}