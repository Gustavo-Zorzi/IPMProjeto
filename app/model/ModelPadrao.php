<?php

namespace App\Model;

use App\Db\Connection;

abstract class ModelPadrao
{
    abstract function getTable();

    function getAll()
    {
        $oConnection = Connection::get();
        
        $sSelect = 'select * from '.$this->getTable();

        $oResult = pg_query($oConnection, $sSelect);

        $aData= [];

        while($aResultado = pg_fetch_assoc($oResult)){
            $aData[] = $aResultado;
        }

        return $aData;
    }

    protected function insert($aValues)
    {
        $oConnection = connection::get();

        $sQuery = 'insert into '.$this->gettable().' ('.implode(",", array_keys($aValues)).') values
        ('.implode(",", array_values($aValues)).')';

       return pg_query($oConnection, $sQuery);
    }

    protected function delete($aWhere)
    {
        $oConnection = connection::get();

        $sQuery = 'delete from '.$this->gettable().' where 1=1';

        foreach($aWhere as $sNomeColuna => $sValor){
            $sQuery .=' and '.$sNomeColuna.' = '.$sValor;
        }

       return pg_query($oConnection, $sQuery);
    }

    protected function update($aData)
    {

        $oConnection = connection::get();

        $sQuery = ' UPDATE ' .$this->gettable();

        $sQuery .= ' SET ' .'('.implode(",", array_keys($aData)).')';

        // $sQuery .= ' WHERE ' .$this->getID();


       return pg_query($oConnection, $sQuery);

    }

    protected function select($nColumn, $nValue)
    {
        $oConnection = Connection::get();
        
        $sSelect = 'select' .$nColumn. 'from '.$this->getTable(). 'where' .$nValue;

        $oResult = pg_query($oConnection, $sSelect);

        $aData= [];

        while($aResultado = pg_fetch_assoc($oResult)){
            $aData[] = $aResultado;
        }

        return $aData;
    }

    function verifuser($aWhere)
    {
        $oConnection = connection::get();

        $sQuery = 'delete from '.$this->gettable().' where 1=1';

        foreach($aWhere as $sNomeColuna => $sValor){
            $sQuery .=' and '.$sNomeColuna.' = '.$sValor;
        }

       return pg_query($oConnection, $sQuery);
    }

    /**
     * Retorna o valor pronto para ser 
     * adicionado no comando SQL
     * @param mixed $xValue
     * @return mixed
     */
    protected function getBdValue($xValue)
    {
        if (!empty($xValue) || !is_null($xValue)) {
            if (is_string($xValue)) {
                return '\'' . pg_escape_string($xValue) . '\'';
            }

            return $xValue;
        }

        return 'NULL';
    }
}
