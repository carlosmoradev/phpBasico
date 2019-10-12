<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

/**Ejercicio1.  recorrer un array de 8 enteros, y hacer lo siguiente:
 * 
 * -Recorrerlo y mostrarlo
 * -Ordenarlo y mostrarlo
 * -Mostrar su longitud
 * -Buscar algun elemento
 */

$numeros = [6,4,7,9,15,56,8,9];

echo "<h4> Ejercicio1 - Recorrer y mostrar el array </h4>";


foreach ($numeros as $key => $numero) {
    echo $numero.'<br/>';
}
echo "Array Recorrido y mostrado";
echo '<hr>';

echo "<h4> Ejercicio1 - ordenar y mostrar el array </h4>";

sort($numeros);



foreach ($numeros as $key => $numero) {
    echo $numero.'<br/>';
}


echo "Array Ordenado y mostrado";
echo '<hr>';

echo "<h4> Ejercicio1 - Mostrar el tamaño del array el array </h4>";



echo "Tamaño del array es: ".count($numeros);
echo '<hr>';

echo "<h4> Ejercicio1 - Buscar elemento en el array </h4>";

$elemento = 56;

echo 'El elemento buscado esta en la posicion: '.array_search($elemento, $numeros).'<br/>';

?>