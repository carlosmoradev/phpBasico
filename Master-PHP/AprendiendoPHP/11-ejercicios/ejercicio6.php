<?php


/**Ejercicio 6
 * Imprimir todas las tablas del 1 al 10 dentro de una tabla html
 */

echo "<table border=1> <tr>"; /* inicio de la tabla */

echo "<tr>"; /**INicio la primera fila de celdas */
    for($cabecera = 1; $cabecera <= 10; $cabecera++){
        echo "<td>Tabla del $cabecera </td>";
    }
    echo "</tr>"; /**cierra la primera fila de celdas */
    
    echo "<tr>"; /**Segunda fila de celdas */
    
    for($i = 1; $i <= 10; $i++){
        echo "<td>";
        for($x = 1; $x <= 10; $x++){
            echo "$i X $X = ".($i*$x).'<br/>';
        }

    }

    echo "</tr>"; /**fin segunda fila de celdas */



echo "</table>"; /**fin de la tabla */

?>
