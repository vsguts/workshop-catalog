<?php

namespace App\Controller;

use App\Database\Query;
use App\Views\Redirect;
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
        $page = (new Query())->fetchRow('SELECT * FROM pages WHERE id = :id', $params);

        return new TemplateView('pages/view', ['page' => $page]);
    }

    public function create($params, $data)
    {
        $query = new Query;

        // $query->execute("INSERT INTO pages (title, content) VALUES (:title, :content)", $data['page']);
        // $id = $query->lastInsertId();

        $id = $query->insert("pages", $data['page']);

        return new Redirect('page?id=' . $id);
    }
    public function update($params,$data)
    {
        $query = new Query;
        $query->execute('UPDATE pages SET title=:title,content=:content WHERE id=:id',$data['page']);
        return new Redirect('/pages');
    }

    public function delete($params,$data)
    {
        $query = new Query;
        $query->delete("pages", $data['page']);
        return new Redirect('/pages');
    }
}
