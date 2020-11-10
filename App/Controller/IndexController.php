<?php

namespace App\Controller;

use App\Views\TemplateView;

class IndexController
{
    public function index()
    {
        return new TemplateView('index/index');
    }
}
