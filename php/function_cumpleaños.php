<?php
function obtenerEdad (string $fecha) : int {
    $actual = new DateTime();
    $fechaUsuario = new DateTime($fecha);
    return $actual->diff($fechaUsuario)->y;
}

function mensajeEdad (string $nombre, int $edad) : string{
    return "La edad de $nombre es : $edad";
}