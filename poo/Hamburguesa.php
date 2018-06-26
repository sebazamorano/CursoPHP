<?php
namespace App;

class Hamburguesa
{
    static protected $tipoPan = 'Blanco';

    static public function tipoPan ()
    {
        return self::$tipoPan;
    }
}