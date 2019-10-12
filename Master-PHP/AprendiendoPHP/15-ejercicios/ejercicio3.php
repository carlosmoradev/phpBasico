<?php

/**Ejercicio3.  
 * Hacer un programa en PHP que comprueba si una variable esta vacia.  En caso encontarla la 
 * llenara con texto en minusculas y mostrarlo en mayusculas y negrita.
 */

$consulta = "";

$textoAlternativo = 'Abandon hope all ye who enter here';

echo "<h5>el texto alternativo original es \"$textoAlternativo\"</h5><br/>";

function verifica(){
    if(empty($consulta)){
        global $textoAlternativo;
        $consulta = $textoAlternativo;
        return strtoupper($consulta);
    }
}

echo '<strong>'.verifica().'</strong>';


?>