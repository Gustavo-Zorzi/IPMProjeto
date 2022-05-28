<?php
namespace App\Controller;

use App\Controller\ControllerPadrao;
use App\Model\ModelUser;
use App\View\ViewUser;

class ControllerUser extends ControllerPadrao
{

    protected function processPage()
    {
        $sTitle = 'User';

        $sContent = ViewUser::render([
            // Passar aqui os parâmetros do conteúdo da página
            'username' => ''
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