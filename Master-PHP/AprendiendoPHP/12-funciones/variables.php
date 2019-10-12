<?php

/**variables locales y globales
 * 
 * Variables globales: Se declaran fuera de una funcion y estan disponible dentro y fuera de las funciones
 * 
 * Locales: se definen dentro de una funcion y no pueden ser usadas fuera de la misma.
 */

$frase = "Si se puede!"; /**variable global */

function llamarFrase(){
    global $frase;  /**En PHP las variables globales deben ser indicadas dentro de la funciones que la usen */
    echo $frase;
}

llamarFrase();

//Funciones Variables.


?>