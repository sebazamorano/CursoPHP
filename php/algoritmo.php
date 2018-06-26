<?php

//Ordenamiento por Seleccion
//camelCase

/*
* Funcion para ordenar array, por seleccion
* @param $array array Por Referencia
*/
function ordenPorSeleccion (array &$array) {
    for ($i = 0; $i < count($array); $i++) {
        for ($j = $i + 1, $k = $i; $j < count($array); $j++) {
            if ($array[$j] < $array[$k]) {
                $tmp = $array[$k];
                $array[$k] = $array[$j]; // 7
                $array[$j] = $tmp;
            }
        }
    }
}

$array = [8,7,1,9,2,6,3,4,5,10];
ordenPorSeleccion($array);

foreach($array as $value) {
    echo $value . '<br>';
}
$numeros = [8,7,1,9,2,6,3,4,5,10];

// Algoritmo Burbija
for ($i = 1; $i < count($numeros); $i++) {
    for ($j = 0; $j < count($numeros) - $i; $j++) {
        echo $numeros[$j];
        echo '<br>';
        echo $numeros[$j + 1];
        echo '<br>';
        if ($numeros[$j] > $numeros[$j + 1]) {
            $tmp = $numeros[$j]; // 7
            $numeros[$j] = $numeros[$j + 1];
            $numeros[$j + 1] = $tmp;
        }
        //var_dump($numeros);
        echo '<br>';
    }
}





