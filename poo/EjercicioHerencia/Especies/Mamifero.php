<?php
namespace App\EjercicioHerencia\Especies;

abstract class Mamifero
{
    public $sexo;
    protected $nombre;

    abstract public function comer();

    public function setNombre ($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getNombre()
    {
        return $this->nombre;
    }
     public function dormir()
     {
        return 'Esta duermiendo';
     }

     function correr()
     {
         return 'Esta Corriendo';
     }

    abstract public function rugir();
}