<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

/** Ejercicio4.
 * Crear un script en php que tenga 4 variables.  Una tipo array, una tipo string,
 * una tipo integer y una booleana.  Imprimir un mensaje segun el tipo de variable
 * que sea.
 */


$primera = "soy un texto";
$segunda = ['posicion0', 'posicion1'];
$tercera = 34345;
$cuarta = false;

echo 'la primera variable es de tipo '.gettype($primera).'<br/>';
echo 'la segunda variable es de tipo '.gettype($segunda).'<br/>';
echo 'la tercera variable es de tipo '.gettype($tercera).'<br/>';
echo 'la cuarta variable es de tipo '.gettype($cuarta).'<br/>';

?>