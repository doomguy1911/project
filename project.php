main
<?php
echo "hola!";
<?php
// solicitar el nombre del usuario
echo "hola, cuál es tu nombre?\n";
$nombre = trim(fgets(STDIN));

// solicitar el año de nacimiento
echo "hola, $nombre. en qué año naciste?\n";
$año_nacimiento = trim(fgets(STDIN));

// Calcular la edad actual
$año_actual = date("Y");
$edad = $año_actual - $año_nacimiento;

// Mostrar el resultado
echo "tienes aproximadamente $edad años.\n";
nueva-funcionalidad
?>