<?php
namespace App;

abstract class Persona
{
    protected $nombre;
    protected $apellidoM;
    protected $apellidoP;
    protected $run;
    protected $sexo = ['Masculino', 'Femenino', 'Sin Definir'];
    protected $peso = 0;
    protected $estatura = 0;
    protected $edad;

    /**
     * @return mixed
     */
    abstract public function getRun();

    /**
     * @param mixed $run
     */
    abstract public function setRun($run);

    public function setEdad($edad)
    {
        return $this->edad = $edad;
    }
    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param mixed $nombre
     */
    public function setNombre($nombre): void
    {
        $this->nombre = $nombre;
    }

    /**
     * @return mixed
     */
    public function getApellidoM()
    {
        return $this->apellidoM;
    }

    /**
     * @param mixed $apellidoM
     */
    public function setApellidoM($apellidoM): void
    {
        $this->apellidoM = $apellidoM;
    }

    /**
     * @return mixed
     */
    public function getApellidoP()
    {
        return $this->apellidoP;
    }

    /**
     * @param mixed $apellidoP
     */
    public function setApellidoP($apellidoP): void
    {
        $this->apellidoP = $apellidoP;
    }

    /**
     * @return array
     */
    public function getSexo(): array
    {
        return $this->sexo;
    }

    /**
     * @param array $sexo
     */
    public function setSexo(array $sexo): void
    {
        $this->sexo = $sexo;
    }

    /**
     * @return int
     */
    public function getPeso(): int
    {
        return $this->peso;
    }

    /**
     * @param int $peso
     */
    public function setPeso(int $peso): void
    {
        $this->peso = $peso;
    }

    /**
     * @return int
     */
    public function getEstatura(): int
    {
        return $this->estatura;
    }

    /**
     * @param int $estatura
     */
    public function setEstatura(int $estatura): void
    {
        $this->estatura = $estatura;
    }


}