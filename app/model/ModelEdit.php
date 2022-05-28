<?php

namespace App\Model;

use App\Db\Connection;


class ModelEdit extends ModelPadrao
{

    public $id;

    public $name;

    public $price;

    public $desc;

    function getTable()
    {
        return 'private.tbproducts';
    }

    function getID()
    {
        $id = $this->getBdValue($this->id);
        return  $id;
    }

    function selectid()
    {
        return parent::getSpecific();
    }

    function updateproduct()
    {
        return parent::update([

            'proname' => $this->getBdValue($this->name),
            'proprice' => $this->getBdValue($this->price),
            'prodesc' => $this->getBdValue($this->desc)
        ]);
    }

}