<?php
namespace App\Controller;

use App\Controller\ControllerPadrao,
    App\View\ViewProducts,
    App\Model\ModelProduct;

class ControllerProducts extends ControllerPadrao
{
    protected function processPage()
    {
        $sTitle = 'Shop';

        $oProduct = new ModelProduct();

        $a = $oProduct->getAll();

        $sContent = ViewProducts::render([
            // Passar aqui os parâmetros do conteúdo da página
            'productsContent' => ViewProducts::getCards($a)
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
