<?php

/**Ejercicio3
 * Imprimir los cuadrados de los 40 primeros numeros naturales
 * PD: usar bucle while
 */

$contador = 1;

while($contador <= 40){
    echo $contador**2;
    echo '<br>';
    $contador++;
}

echo '<hr>';

echo 'ahora con el bucle for'.'<br>';

for($i = 0; $i <= 40; $i++){
    $cuadrado = $i**2;
    echo "el cuadrado de $i es: ".$cuadrado.'<br>';
}

?>