<?php

/**
 * Rederiza o conteúdo da página solicitada
 * @param string $sPage
 * @return string
 */
function render($sPage)
{
    switch ($sPage) {
        case 'home':
            return (new App\Controller\ControllerHome)->render();
        case 'car':
            return (new App\Controller\ControllerCar)->render();
        case 'products':
            return (new App\Controller\ControllerProducts)->render();
        case 'cad':
            return (new App\Controller\ControllerCad)->render();
        case 'admin':
            return (new App\Controller\ControllerAdmin)->render();
        case 'pmanager':
            return (new App\Controller\ControllerProduct)->render();
        case 'edit':
            return (new App\Controller\ControllerEdit)->render();
            
    }

    return (new App\Controller\Controller404)->render();
}
