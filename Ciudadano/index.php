<?php
include_once 'vendor/autoload.php';

use App\Ciudadano;

$ciudadano = new Ciudadano();
$ciudadano->setNombre('Pepito');
$ciudadano->setApellidoP('Paga');
$ciudadano->setApellidoM('Doble');
$ciudadano->setPeso(60);
$ciudadano->setEstatura(150);
$ciudadano->setEdad(19);
echo $ciudadano->calcularIMC();
echo '<br>';
var_dump($ciudadano->isMayorEdad());
echo '<br>';
if (!!$ciudadano->getRun()){
    $ciudadano->getRun();
} else {
    $ciudadano->generateRUN();
    $ciudadano->getRun();
}

//echo $ciudadano;
$date = new DateTime('1988-01-09');
var_dump($date->diff());