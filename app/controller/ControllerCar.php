<?php
namespace App\Controller;

use App\Controller\ControllerPadrao;
use App\View\ViewCar;

class ControllerCar extends ControllerPadrao
{
    protected function processPage()
    {
        $sTitle = 'Car';

        $sContent = ViewCar::render([
            // Passar aqui os parâmetros do conteúdo da página
            'carContent' => '<h1>Carrinho!</h1>'
        ]);

        $this->footerVars = [
            // Passar aqui os parametros do footer da página
            'footerContent' => '<h5>Welcome!</h5>'
        ];

        return parent::getPage(
            $sTitle,
            $sContent
        );
    }
}

?>