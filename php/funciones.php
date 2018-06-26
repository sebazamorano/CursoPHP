<?php declare(strict_types=1);
/*
  * Esta es un ejemplo de estructura de funciones en
  * php
  * @param $var2 string
  * @param $var1 string
  * @param $var3 string
  * @return string
  */
function minombredefunction ($var1, $var2, $var3) {
    return 'esto es una funcion';
}

/*
* Declarando con parametos con valor por defecto
 * el valor por defecto se le asigna un valor a la variable
 * por norma se debe dejar al final de los parametros
*/
function datosNull ($var1, $var2, $var3 = 'string') {

}

/*
* Declarando funcion con tipo de datos
 * esto aplica solamente a PHP > 7
*/
function conTipoDato (string $var1, int $var2 = 0) : string {

}

$var1 = 1;
$var2 = 2;
$var3 = 3;
// Uso de funciones
minombredefunction($var1, $var2, $var3);
minombredefunction(1, 2, 3);
datosNull($var1, $var2, $var3);
//echo minombredefunction($var1, $var2, $var3);

$num1 = 30;
$num4 = 40;
$suma = $num1 + $num4;

function sumar (int $num1, int $num2) : int {
    return $num1 + $num2;
}

$suma = sumar($num1, $num4);
//echo $suma;

/*
 *
 */
function varInfinto (...$var) {
    return $var;
}

//var_dump(varInfinto(1,2,3,4,5,6,7,8,9,0,0));
$va1 = 33;
$var2 = 'Hola';
$var4 = 'Sebastian';
//var_dump(compact('var1', 'var2', 'var4'));

$functionAnonima = function ($a = 0, $b = 1) {
    return $a + $b;
};

echo $functionAnonima(33, 44);

$numero = function () {
    return [1,2,4,5,123,5,65,77];
};

function sumaDeNumeros ($anonima, bool $sumar = true) {
    $sumatoria = 0;
    $numero = $anonima();
    if ($sumar) {
        for ($i = 0; $i < count($numero); $i++) {
            $sumatoria = $numero[$i] + $sumatoria;
        }
        return $sumatoria;
    } else {
        return 'No se sumaron los numeros';
    }
}

echo sumaDeNumeros($numero);
echo sumaDeNumeros($numero, false);
$suma = sumaDeNumeros($numero);
$a = function () {
    return null;
};
echo PHP_EOL;
function saludo(string &$nombre, string $apellido): string {
    $nombre = 'Cristian';
    return "Hola, $nombre $apellido";
}
$nombre = 'Pepito';
$apellido = 'Paga Doble';
echo saludo($nombre, $apellido);
echo PHP_EOL;
echo $nombre;


