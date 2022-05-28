<?php
namespace App\Controller;

use App\Controller\ControllerPadrao;
use App\View\ViewEdit;
use App\Model\ModelEdit;
use App\Db\Connection;


class ControllerEdit extends ControllerPadrao
{

    function getElementByID()
    {
        $id = $_GET['proid'];
        $oQuery = new ModelEdit;
        $oQuery->selectid();
    }

    protected function processPage()
    {
        $oEdit = new ModelEdit();

        $id = $oEdit->getSpecific();

        $sTitle = 'Edit Products!';

        $sContent = ViewEdit::render([
            var_dump(Connection::get()),
            // Passar aqui os parâmetros do conteúdo da página
            'upContent' => "<h3>Edit Product</h3>",
            'proname' => ViewEdit::getEditHTML($id)
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
    function processUpdate(){
        
        $proid = $_GET['proid'] ??= '';
        $proname = $_GET['proname'] ??= '';
        $proprice = $_GET['proprice'] ??= '';
        $prodesc = $_GET['prodesc'] ??= '';
        $oEditp = new ModelEdit;
        $oEditp->id = $proid;
        $oEditp->name = $proname;
        $oEditp->price = $proprice;
        $oEditp->desc = $prodesc;

        $oEditp->updateproduct();

        return $this->processPage();
    }
}
