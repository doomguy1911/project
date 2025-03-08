<?php

echo "hola! bienvenid@ a mi proyecto en el repositorio"

// solicitar el nombre del usuario
echo "hola, cuál es tu nombre?\n";
$nombre = trim(fgets(STDIN));
$nombre2 = trim(fgets(STDIN));
$nombre3 = trim(fgets(STDIN));

// solicitar el año de nacimiento
echo "hola, $nombre. en qué año naciste?\n";
$año_nacimiento = trim(fgets(STDIN));

// Calcular la edad actual
$año_actual = date("Y");
$edad = $año_actual - $año_nacimiento;

// Mostrar el resultado
echo "tienes aproximadamente $edad años.\n";
?>