<?php
include "Persona.php";

$persona1 = new Persona('Sebastian', 30, '16663224-2');
$persona1->setPeso(10);
echo $persona1->getPeso();

$persona2 = new Persona('Pepito', 10, '1-9');
$persona2->setApellido('Paga Doble');
$persona2->setColorPelo('Azul');

$array = [
    [
        'nombre' => 'Federico',
        'edad' => 20,
        'rut' => '444444-4'
    ],
    [
        'nombre' => 'Daniel',
        'edad' => 25,
        'rut' => '55555-5'
    ]
];

$personas = [];

foreach($array as $item) {
    $personas[] = new Persona($item['nombre'], $item['edad'], $item['rut']);
}

var_dump($personas[1]->nombre);


