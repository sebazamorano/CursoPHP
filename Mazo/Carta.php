<?php
namespace Mazo;

class Carta
{
    protected static $valores = ['AS', 2, 3, 4, 5, 6, 7, 8, 9, 10, 'J', 'Q', 'K'];
    protected static $tipos = ['Corazon', 'Pica', 'Trebol', 'Diamante'];
    protected $numero;
    protected $figura;

    public function __construct($numero, $figura)
    {
        $this->numero = self::$valores[$numero];
        $this->figura = self::$tipos[$figura];
    }

    static public function getTipos () : array
    {
        return self::$tipos;
    }

    static public function getValores () : array
    {
        return self::$valores;
    }
        public function __toString() : string
    {
        return '<p>'. $this->numero . ' ' . $this->figura. '</p>';
    }
}