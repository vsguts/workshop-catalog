<?php

namespace App\Controller;

use App\Views\TemplateView;

class PagesController
{
    public function getList()
    {
        // echo 'Get List Method indeed';
        return new TemplateView('pages/list', [
            'name' => 'Michael!!',
            'title' => 'Index page'
        ]);
    }

    public function getItem()
    {
        echo 'Get Item method';
    }
}
