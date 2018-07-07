<?php
namespace App\EjercicioHerencia\Felinos;

use App\EjercicioHerencia\Especies\Mamifero;

abstract class Felino extends Mamifero
{
    abstract function ronronear ();

    public function rugir()
    {

    }

    public function comer()
    {
        return 'Comen Carne';
    }
}