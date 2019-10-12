<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

/**Ejercicio2. 
 * Escribir un programa en PHP que añada valores al array mientras que su longitud
 * sea menor a 120 y luego mostrarlo por pantalla.
 */

function mostrarValores($valores){
    for($i=0; $i < count($valores); $i++){
        echo "En la posicion $i el valor es: $valores[$i]<br/>";
    }
}

$valores = ['2','4','5','6','7','8','9','767'];


$longitud = 120;

echo "Estos son los valores originales <br/>";
echo mostrarValores($valores);

while (count($valores) < $longitud+1) {
    $adicional = rand(1, 99);

    array_push($valores, $adicional);

}

echo "<hr>y asi quedan al aumentar la longitud a $longitud <br/><hr>";
echo mostrarValores($valores);

?>