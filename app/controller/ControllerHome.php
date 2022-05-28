<?php

namespace App\Controller;

use App\Controller\ControllerPadrao;
use App\View\ViewHome;

class ControllerHome extends ControllerPadrao
{

    protected function processPage()
    {
        $sTitle = 'Home';

        $sContent = ViewHome::render([
            // Passar aqui os parâmetros do conteúdo da página
            'homeContent' => ''
        ]);

        $this->footerVars = [
            // Passar aqui os parametros do footer da página
            'footerContent' => '    <div  class="form-check d-flex justify-content-center mb-4">
                                            <a class="btn btn-primary btn-center" href="index.php?pg=products">
                                            Join Today
                                            </a>
                                    </div>'
        ];

        return parent::getPage(
            $sTitle,
            $sContent
        );
    }
}
