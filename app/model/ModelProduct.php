<?php

namespace App\Model;

use App\Db\Connection;


class ModelProduct extends ModelPadrao
{
    public $id;
    function getTable()
    {
        return 'public.tbproducts';
    }

    function getID()
    {
        return '';
    }
    
    function deleteproduto(){

        $iidprodutos = $this->id;

        return parent::delete([
            'proid' => $iidprodutos
        ]);
    }



}