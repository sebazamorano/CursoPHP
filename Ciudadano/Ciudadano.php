<?php
namespace App;

use \Freshwork\ChileanBundle\Rut;

class Ciudadano extends Persona
{
    public function getRun()
    {
        return $this->run;
    }

    public function setRun($run)
    {
        $this->run = $run;
    }

    public function calcularIMC()
    {
        if (is_null($this->estatura) && is_null($this->peso)) {
            return 'Falta peso y estatura';
        }

        return $this->peso / ($this->estatura * 100)**2;
    }

    public function isMayorEdad()
    {
        return !is_null($this->edad) && $this->edad > 18;
    }

    public function generateRUN()
    {
        $rand = rand(1000000, 25000000);
        $rut = new Rut($rand);
        $this->run = $rut->fix()->format();
    }

    public function __toString()
    {
        $mensaje = "Nombre: {$this->nombre} ";
        $mensaje .= "Apellido: {$this->apellidoP} {$this->getApellidoM()} ";
        $mensaje .= "RUN: {$this->run} ";

        return $mensaje;
    }

}