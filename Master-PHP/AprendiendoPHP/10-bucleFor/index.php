<?php

echo "bucle for";
echo "<hr>";
// for(expresion inicial, condicion, actualizando contador){
//     Bloque de instrucciones;
// }

// Ejemplo.  sumar todos los numeros del 1 al 100 y mostrar el 
// resultado final

$resultado = 0;

for($i =0; $i<=100; $i++){
    $resultado += $i;
    
}

echo "el resultado es: $resultado";

?>