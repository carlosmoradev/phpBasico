<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

$archivo = $_FILES['archivo'];


$nombre = $archivo['name'];
$tipo = $archivo['type'];

if($tipo == "image/jpg" || $tipo == "image/jpeg" || $tipo == "image/png" || $tipo == "image/gif"  ){


    if(!is_dir('images')){
        mkdir('images', 0777);
    }

    move_uploaded_file($archivo['tmp_name'], 'images/'.$nombre);

    echo '<h1> imagen '.$nombre.' cargada correctamente </h1>';
    header("Refresh: 2, URL=index.php");


}else{
    header("Refresh: 2, URL=index.php");
    echo "formato de imagen incorrecto<br>";
}