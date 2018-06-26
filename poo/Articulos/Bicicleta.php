<?php
namespace App\Articulos;

use App\Persona;

class Bicicleta
{
    public $ruedas = 2;
    public $color;
    protected $tipos = ['mountainbike', 'ruta', 'niños', 'bmx', 'familiares'];
    protected $tipoBicicleta;
    protected $luces = false;

    public function __construct($color)
    {
        $this->color = $color;
    }
    public function getTipo()
    {
        return 'La bicicleta es tipo :' . $this->tipoBicicleta;
    }
    public function setLuces (bool $luces)
    {
        return $this->luces = $luces;
    }

    public function setTipo (string $tipo)
    {
        $noexiste = false;
        foreach($this->tipos as $tipoBicicleta) {
            if ($tipoBicicleta === $tipo) {
                $this->tipoBicicleta = $tipoBicicleta;
            } else {
                $noexiste = true;
            }
        }
        return ($noexiste)? '': 'No existe ese tipo bicicleta';
    }

    public function avanzar()
    {
        return 'La bicicleta esta avanzando';
    }

    public function frenar ()
    {
        return 'La bicicleta esta frenando';
    }

    public function detenerse ()
    {
        return 'La bicicleta se detiene';
    }

    public function encenderLuces ()
    {
        if ($this->luces) {
            return 'La bicicleta Enciende las luces';
        } else {
            return 'La bicicleta no tiene luces';
        }
    }
}