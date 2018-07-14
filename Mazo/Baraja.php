<?php
namespace Mazo;

class Baraja
{
    protected $total = 52;
    public $mazo = [];

    public function crearBaraja ()
    {
        $tipos = Carta::getTipos();
        $valores = Carta::getValores();
        for ($i = 0; $i < count($tipos); $i++) {
            for ($j = 0; $j < count($valores); $j++) {
                //$i => FIGURA
                //$j => VALOR
                //array_push($this->mazo, new Carta($j, $i));
                $this->mazo[] = new Carta($j, $i);
            }
        }
    }

    public function barajar()
    {
        for ($i = 0; $i < count($this->mazo); $i++) {
            $numRand = rand(0, count($this->mazo) - 1);
            $carta = $this->mazo[$i];
            $this->mazo[$i] = $this->mazo[$numRand];
            $this->mazo[$numRand] = $carta;
        }
    }

    public function darCartas(int $cantidad)
    {
        $cartas = [];
        for ($i = 0;$i < $cantidad; $i++) {
            $cartas[] = $this->mazo[$i];
        }
        array_splice($this->mazo, 0, $cantidad);

        return $cartas;
    }
}