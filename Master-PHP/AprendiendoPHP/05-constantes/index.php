<?php

/*
Al igual que las variables, las contantes almacenan datos con la diferencia de que luego no pueden
ser modificadas

Declaracion de constantes:

define(NombreConstante);

Las constantes se muestran si anteponerles $GLOBALS

echo $constante:    -> error
echo constante      -> correcto

*/

define('nombre', 'Carlos Mora');
define('web', 'carlosmora.biz');

echo '<h1>'.nombre.'</h1>';
echo '<h1>'.web.'</h1>';

//Variable
$web = "carlosmora.biz";

echo '<h1>'.$web.'</h1>';

//Constantes predefinidas

echo PHP_VERSION;
echo '<br>';
echo PHP_EXTENSION_DIR;
echo '<br>';
echo __DIR__;



?>