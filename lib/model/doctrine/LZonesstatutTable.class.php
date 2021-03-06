<?php


class LZonesstatutTable extends Doctrine_Table
{
    
    public static function getInstance()
    {
        return Doctrine_Core::getTable('LZonesstatut');
    }
    public static function listReserves()
    {
        $query = Doctrine_Query::create()
          ->select('id_zone id_reserve, nomzone nom_reserve')   
          ->from('LZonesstatut')
          ->where('id_type IN (5,6,10,11)');
        $val = $query->fetchArray();       
        return $val;
    }
    public static function listN2000()
    {
        $query = Doctrine_Query::create()
          ->select('id_zone id_n2000, nomzone nom_n2000')   
          ->from('LZonesstatut')
          ->where('id_type IN (7,8)');
        $val = $query->fetchArray();       
        return $val;
    }
}