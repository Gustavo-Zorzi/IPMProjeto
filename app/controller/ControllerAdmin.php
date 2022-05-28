<?php
namespace App\Controller;

use App\Controller\ControllerPadrao;
use App\Model\ModelAdmin;
use App\View\ViewAdmin;

class ControllerAdmin extends ControllerPadrao
{
    protected function processPage()
    {
        $sTitle = 'Admin Page';

        $sContent = ViewAdmin::render([
            // Passar aqui os parâmetros do conteúdo da página
            'adminContent' => '<h3>Product Register</h3>'
            
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

    function processInsert(){
        
        $proname = $_POST['proname'] ??= '';
        $proprice = $_POST['proprice'] ??= '';
        $proimg = $_POST['proimg'] ??= '';
        $prodesc = $_POST['prodesc'] ??= '';
        $oProd = new ModelAdmin();
        $oProd->proimg = $proimg;
        $oProd->proname = $proname;
        $oProd->proprice = $proprice;
        $oProd->prodesc = $prodesc;

        $oProd->insertproduct();

        return $this->processPage();

    }
}
