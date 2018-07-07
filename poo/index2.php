<?php
include_once "vendor/autoload.php";

// Aquí llamamos los archivos o clases que vamos a ocupar en este archivo
/*use App\Persona;
use App\Articulos\Bicicleta;
use App\Hamburguesa;

$biclicleta = new Bicicleta("azul");
$biclicleta->setLuces(true);
$biclicleta->setTipo('niños');
echo $biclicleta->getTipo();
echo '<br>';
echo $biclicleta->avanzar();
echo '<br>';
echo $biclicleta->detenerse();
echo '<br>';
echo $biclicleta->encenderLuces();
echo '<br>';

$tipo = Hamburguesa::tipoPan();
echo $tipo;


$persona1 = new Persona('Sebastian', 30, '16663444-2');
$persona1->setPeso(10);
$persona1->getPeso();
if ($persona1->isValidRut()) {
    echo "El rut de {$persona1->nombre} es valido";
} else {
    echo "El rut no es valido";
}
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
}*/

//var_dump($personas[1]->nombre);

function miFuncion ($arg1, $arg2, $arg3) {
    $saludo = $arg1 . ' ' . $arg2 . ' ' . $arg3;

    return $saludo;
}
function funcion2 (string $nombre, string $apellido, int $edad) : string {
    return $nombre . ' ' . $apellido . ' ' . $edad;
}
$saludo = miFuncion("hola", "como", "estas");
//echo $saludo;

$nombre = funcion2("Sebastian", "Zamorano", 30);
echo $nombre;




