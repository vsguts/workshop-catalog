<?php

namespace App\Views;

class TemplateView implements ViewInterface
{
    private $templateName;

    private $data;

    public function __construct(string $templateName, array $data = [])
    {
        $this->templateName = $templateName;
        $this->data = $data;
    }

    public function render()
    {
        $data = $this->data;

        $data['content'] = $this->_render($this->templateName, $data);

        echo $this->_render('layout', $data);
    }

    private function _render($templateView, $data)
    {
        $viewname = __DIR__ . '/../../views/' . $templateView . '.php';
        if (!file_exists($viewname)) {
            throw new \Exception('View not found');
        }

        extract($data);

        ob_start();

        require $viewname;

        return ob_get_clean();
    }
}
