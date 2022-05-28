<?php
namespace App\Controller;

use App\Controller\ControllerPadrao;
use App\View\View404;

class Controller404 extends ControllerPadrao
{
    protected function processPage()
    {
        $sTitle = 'Page Not found';

        $sContent = View404::render([
            // Passar aqui os parâmetros do conteúdo da página
            '404Content' => '<h1>OOPS! 404 PAGE NOT FOUND!</h1>'
        ]);

        $this->footerVars = [
            // Passar aqui os parametros do footer da página
            'footerContent' => ''
        ];

        return parent::getPage(
            $sTitle,
            $sContent
        );
    }
}
