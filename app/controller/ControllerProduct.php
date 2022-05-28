<?php
namespace App\Controller;

use App\Controller\ControllerPadrao;
use App\Model\ModelProduct;
use App\View\ViewProduct;
use App\Db\Connection;

class ControllerProduct extends ControllerPadrao
{
    protected function processPage()
    {

        $oProduct = new ModelProduct();

        $a = $oProduct->getAll();

        $sTitle = 'Admin Manager';

        $sContent = ViewProduct::render([
            // Passar aqui os parâmetros do conteúdo da página

            'tableContent' => ViewProduct::getTableHTML($a)
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
    function processdelete(){
        
        $iidprodutos = $_GET['proid'] ??= '';
        $oModelProduto = new ModelProduct;
        $oModelProduto->id = $iidprodutos;
        $oModelProduto->deleteproduto();

        return $this->processPage();
    }
}
