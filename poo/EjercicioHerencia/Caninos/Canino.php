<?php
namespace App\EjercicioHerencia\Caninos;

use App\EjercicioHerencia\Especies\Mamifero;

class Canino extends Mamifero
{
    protected $peso;
    protected $raza;

    public function __construct($peso, $raza = null)
    {
        $this->peso = $peso;
        $this->raza = $raza;
    }

    public function comer()
    {

    }

    public function rugir()
    {

    }
}