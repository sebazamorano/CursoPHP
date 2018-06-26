<?php
include "function_cumpleaños.php";

echo mensajeEdad($_POST["nombre"], obtenerEdad($_POST["fecha"]));