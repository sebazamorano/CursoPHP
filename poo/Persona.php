<?php

class Persona {
    //Atributos de mi Clase
    public $nombre;
    public $edad;
    public $rut;
    protected $peso;
    protected $estatura;
    protected $color_pelo;
    protected $apellido;

    public function __construct($nombre, $edad, $rut)
    {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->rut = $rut;
    }

    public function getRut ()
    {
        return $this->rut;
    }

    public function setPeso (int $peso)
    {
        $this->peso = $peso;
    }

    public function getPeso () : int
    {
        return $this->peso;
    }

    /**
     * @return mixed
     */
    public function getEstatura() : int
    {
        return $this->estatura;
    }

    /**
     * @param mixed $estatura
     */
    public function setEstatura($estatura): void
    {
        $this->estatura = $estatura;
    }

    /**
     * @return mixed
     */
    public function getColorPelo() : string
    {
        return $this->color_pelo;
    }

    /**
     * @param mixed $color_pelo
     */
    public function setColorPelo($color_pelo): void
    {
        $this->color_pelo = $color_pelo;
    }

    /**
     * @return mixed
     */
    public function getApellido() : string
    {
        return $this->apellido;
    }

    /**
     * @param mixed $apellido
     */
    public function setApellido($apellido): void
    {
        $this->apellido = $apellido;
    }

    /*
     * Saludo a la Persona
     */
    public function saludar() {
        return "Hola " . $this->nombre;
    }
}