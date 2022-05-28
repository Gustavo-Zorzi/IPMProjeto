<?php
namespace App\Model;

use App\Db\Connection;
use App\Model\ModelPadrao;
use App\View\ViewUser;

class ModelUser extends ModelPadrao
{
    function getTable()
    {   
        $xtable = 'private.tbuser';
        return $xtable;
        var_dump($xtable);
    }

    public $email;
    public $password;
    public $name;
    public $lastname;

    function processVerif(){

        return parent::verifuser([
            'email' =>  $this->getBdValue($this->email),
            'password' =>  $this->getBdValue($this->password)
        ]);
    }
}
