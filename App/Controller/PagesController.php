<?php

namespace App\Controller;

use App\Database\Query;
use App\Views\TemplateView;

class PagesController
{
    public function getList()
    {
        $pages = (new Query())->fetchAll("SELECT * FROM pages");

        return new TemplateView('pages/list', [
            'pages' => $pages,
            'title' => 'List of pages'
        ]);
    }

    public function getItem($params)
    {
        $result = (new Query())->fetchRow('SELECT * FROM pages WHERE id = :id', $params);
        pd($result);
    }
}
