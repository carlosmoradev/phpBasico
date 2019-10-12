<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
/**Funciones para arrays en php */

$distribuciones = ['gentoo', 'ubuntu', 'centos', 'puppy'];

asort($distribuciones);   /**asort ordena el array hacia arriba
                            arsort lo hace en orden inverso
*/

array_push($distribuciones, "Redhat");

var_dump($distribuciones);

$suerte = array_rand($distribuciones);

echo $distribuciones[$suerte];

?>