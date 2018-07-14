<?php

require "vendor/autoload.php";

use Mazo\Baraja;

$baraja = new Baraja();
$baraja->crearBaraja();
$baraja->barajar();
$cartas = $baraja->darCartas(2);

var_dump($cartas);
