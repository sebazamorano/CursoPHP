<?php
declare(strict_types=1);
echo 'Hola mundo';
echo nl2br("\n");
//Comentario de Linea
/*
 Ejemplos de Booleanos
 */
true;
false;
$bool = true;
var_dump($bool);
$bool = false;
var_dump($bool);
$bool = 1;
var_dump($bool);

$numero = (int) 33;
$numero = (string) 33;
$numero = (bool) 33;
$noexiste = null;
var_dump($noexiste);
echo nl2br("\n");
/*
 * Array's
 */
$array1 = array(1,2,3,4,5);
$array1 = ['Manzana', 'Pera', 'Naranja'];
var_dump($array1);
echo $array1[0];
echo nl2br("\n");
echo nl2br("\n");
$array2 = ['fruta' => 'Manzana', 'verdura' => 'Lechuga'];
var_dump($array2);
$array3 = [
    'fruta' => ['Manzana', 'Pera', 'Naranja'],
    'verdura' => ['Lechuga', 'Apio', 'Zapallo']
];
echo nl2br("\n");
echo nl2br("\n");
var_dump($array3['fruta'][2]);
$array = [
    "nombre" => 'Pepito',
    "correo" => 'pepito@gmail.com',
    "edad" => 30,
    "habilitado" => false
];

$personas = [
    //Indice 0
    [
        "nombre" => 'Pepito',
        "correo" => 'pepito@gmail.com',
        "edad" => 30,
        "habilitado" => false
    ],
    //Indice 1
    [
        "nombre" => 'Juanito',
        "correo" => 'juanito@gmail.com',
        "edad" => 20,
        "habilitado" => true
    ]
];
echo nl2br("\n");
echo nl2br("\n");
var_dump($personas[1]["correo"]);

/*
 * Constantes
 */

const PI = 3.14;
const CIUDADES = ['Santiago', 'Arica', 'Valparaiso'];
var_dump(PI);
echo nl2br("\n");
var_dump(CIUDADES[0]);
//Constantes de PHP
//var_dump($_SERVER);
//var_dump($_GET['nombre']);
//var_dump($_POST);
var_dump(__DIR__);
var_dump(__LINE__);

/*
 * Operadores
 */

//SUMA
$num1 = 24;
$num2 = 34;
$suma = $num1 + $num2;
echo nl2br("\n");
echo $suma;
echo nl2br("\n");
//RESTA
$num1 = 24;
$num2 = 34;
$suma = $num1 - $num2;
echo $suma;
//MULTIPLICACION
$num1 = 3;
$num2 = 3;
$mult = $num1 * $num2;
echo nl2br("\n");
echo $mult;
//DIVISION
$num1 = 10;
$num2 = 2;
$div = $num1 / $num2;
echo nl2br("\n");
echo $div;
//Potencia
$potencia = 2 ** 2;
echo nl2br("\n");
echo $potencia;
//Resto o MOD
$mod = 2 % 3;
echo nl2br("\n");
echo $mod;
echo nl2br("\n");
echo nl2br("\n");
$suma = "3" + 2;

echo $suma;

$operador = 2 == 23;
$operadorDistinto = 2 != 23;
$operadorTipo = "3" === 3;
// 2 es igual 2 O 3 es igual 4
$juntar = 2 == 4 || 3 == 4;
$juntar2 = 2 == 2 && 3 == 3;
$negacionCondicion = !(2 == 3);
echo nl2br("\n");
var_dump($operador);
var_dump($operadorDistinto);
var_dump($operadorTipo);
var_dump($juntar);
var_dump($juntar2);
var_dump($negacionCondicion);
echo $operador;
echo nl2br("\n");echo nl2br("\n");echo nl2br("\n");
/*
 * Estructuras Condicionales
 */
if (true) {
    echo 'Es verdadero';
}
echo nl2br("\n");
if (2 == 3) {
    echo 'Son iguales';
} else {
    echo 'No son iguales';
}

if (2 == 3) {

} else if (2 == 4) {

} else if (2 == 2) {

}
echo nl2br("\n");
$num1 = 500;
$num2 = 1000;

if ($num1 > $num2) {
    echo "El $num1 es mayor";
} else {
    echo "El $num2 es Mayor";
}

$numero = 1223 % 2;
echo nl2br("\n");
if ($numero == 0) {
    echo "El numero es par";
} else {
    echo "El numero no es par";
}
echo nl2br("\n");
$a = 2;
switch ($a){
    case 1:
        echo 'Es uno';
    break;
    case 2:
        echo 'Es dos';
    break;
    case 3:
        echo 'Es tres';
    break;
    default:
        echo 'No es Ninguno';
}

/*
 * Ternario
 */
//Caracteres > 10
$largoCaracteres = (strlen("Hola") >= 10)? 'Cumple' :'No Cumple';
//$largoCaracteres = (strlen("Hola") <= 10) ?? 'Cumple';
echo $largoCaracteres;

// Asignacion
$numero = 1;
//$numero = $numero + 1;
$numero = $numero++;

$resta = 20;
$resta = $resta--;

/*
 * Loop
 */
echo nl2br("\n");
$i = 1;
while ($i <= 10) {
    echo $i;
    echo nl2br("\n");
    //$i = $i + 1;
    $i++;
}
$i = 10;
do {
    echo $i;
    echo nl2br("\n");
    $i--;
} while($i >= 0);

for ($i = 1; $i <= 10; $i++){
    echo $i;
    echo nl2br("\n");
}

$array1 = ['Manzana', 'Pera', 'Naranja'];

for ($i = 0; $i < count($array1); $i++) {
    echo $i;
    echo nl2br("\n");
    echo $array1[$i];
    echo nl2br("\n");
}




















