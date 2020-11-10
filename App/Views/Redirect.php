<?php

namespace App\Views;

class Redirect implements ViewInterface
{
    private $url;

    public function __construct(string $url)
    {
        $this->url = $url;
    }

    public function render()
    {
        header('Location: ' . $this->url);
    }
}
