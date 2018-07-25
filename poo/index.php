<?php
include_once "vendor/autoload.php";

use App\EjercicioHerencia\Dueno;
use App\EjercicioHerencia\Felinos\Leon;
use App\EjercicioHerencia\Caninos\Perro;

use App\Baraja\Carta;

$carta = new Carta();
$carta->setNumero(1);
$carta->setTipo(2);
var_dump($carta);


