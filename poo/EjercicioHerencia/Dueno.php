<?php
namespace App\EjercicioHerencia;

use App\Persona;

class Dueno extends Persona
{
    protected $domicilio;

    public function setDomicilio($domicilio)
    {
        $this->domicilio = $domicilio;
    }

    public function getDomicilio()
    {
        return $this->domicilio;
    }
}