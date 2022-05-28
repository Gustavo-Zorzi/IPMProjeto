<?php
namespace App\Controller;

use App\Controller\ControllerPadrao;
use App\View\ViewCad;

class ControllerCad extends ControllerPadrao
{
    protected function processPage()
    {
        $sTitle = 'User';



        $sContent = ViewCad::render([
            // Passar aqui os parâmetros do conteúdo da página
            'userContent' => ""
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

?>