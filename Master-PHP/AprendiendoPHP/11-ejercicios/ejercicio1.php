<?php

/**
 * Ejercicio1.
 * Crear dos variables "pais" y "continente" y mostrar su valor por pantalla.
 * Poner un comentario acerca de que tipo de dato tienen.
 */

use function PHPSTORM_META\type;

$pais = 'Colombia';
$continente = 'SurAmerica';

echo "el pais es $pais y el continente es $continente <br>";

echo "<p> la variable \$pais es de tipo ".gettype($pais)."</p>";
echo "<p> la variable \$continente es de tipo ".gettype($continente)."</p>";


?>