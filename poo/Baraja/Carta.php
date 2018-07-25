<?php
namespace App\Baraja;

class Carta
{
	protected $tipos = ['PICA', 'TREBOL', 'CORAZON', 'DIAMANTE'];
	protected $valores = ['AS', 2, 3, 4, 5, 6, 7, 8, 9, 10, 'J', 'Q', 'K'];
	protected $numero;
	protected $tipo;

	public function setNumero(int $numero)
	{
		$this->numero = $this->valores[$numero];
	}

	public function setTipo(int $tipo)
	{
		$this->tipo = $this->tipos[$tipo];
	}
}