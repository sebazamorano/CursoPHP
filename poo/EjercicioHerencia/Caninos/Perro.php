<?php
namespace App\EjercicioHerencia\Caninos;

use App\EjercicioHerencia\Dueno;

class Perro extends Canino
{
    protected $dueno;

    public function setDueno(Dueno $dueno)
    {
        if (is_null($dueno->getDomicilio())) {
            return 'El Dueño no tiene domicilio';
        }

        $this->dueno = $dueno;
    }

    public function getDueno ()
    {
        return 'El nombre del dueño es:' . $this->dueno->nombre;
    }



    public function hasDueno()
    {
        return !! $this->dueno;
    }
}