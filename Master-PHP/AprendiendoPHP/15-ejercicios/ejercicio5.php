<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

/**Ejercicio5.
 * Crear un array con el contenido de la siguiente tabla:
 * 
 * ACCION       AVENTURA        DEPORTES
 * GTA          Assassins       FIFA19
 * COD          Crash           PES 19
 * PUGB         Prince of P     MOto GP2019
 * 
 Presentarlo en html teniendo cada fila en ficheros separados (includes).
 */

 $listado = array(
     "ACCION"   => array('GTA 5','Call of duty','PUGB'),
     "AVENTURA" => array('Assassin Creed','Crash Bandicoot','Prince of Persia'),
     "DEPORTES" => array('Fifa 19','PES 19','Moto GP 19')
 );

$categorias = array_keys($listado);
// var_dump($categorias);
?>

<table border="1">
<?php include('includesEj15/cabecera.php');?>
<?php include('includesEj15/fila1.php');?>
<?php include('includesEj15/fila2.php');?>
<?php include('includesEj15/fila3.php');?>




</table>