<?php

namespace App\Model;

use App\Db\Connection;


class ModelAdmin extends ModelPadrao
{
    public $proname;

    public $proprice;

    public $prodesc;

    public $proimg;

    function getTable()
    {
        return 'public.tbproducts';
    }
    function getCollumn()
    {

        return ''; 
    }

    function getRow()
    {
        return '';
    }
    function insertproduct(){

        return parent::insert([
            'proname' => $this->getBdValue($this->proname),
            'proprice' => $this->getBdValue($this->proprice),
            'proimg' => $this->getBdValue($this->proimg),
            'prodesc' => $this->getBdValue($this->prodesc)
        ]);
    }



}