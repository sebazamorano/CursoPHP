<?php
include_once "vendor/autoload.php";

use App\EjercicioHerencia\Dueno;
use App\EjercicioHerencia\Felinos\Leon;
use App\EjercicioHerencia\Caninos\Perro;

$duenio = new Dueno('Sebastian', 30, '0-9');
$duenio->setDomicilio('Phillips 16, Santiago Centro');

$perro = new Perro('10kg', 'Quiltro');
$perro->setNombre('bobby');
$perro->setDueno($duenio);
if ($perro->hasDueno()) {
    //var_dump($perro->getDueno());
    echo $perro->getDueno();
}



//echo $perro->getNombre();
echo '<br>';
/*$leon = new Leon();
echo $leon->ronronear();*/
//var_dump($perro);
