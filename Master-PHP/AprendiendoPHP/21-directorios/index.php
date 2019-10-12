<?php

if(!is_dir('nuevoDirectorio')){
    mkdir('nuevoDirectorio', 0777) or die('Error creando el directorio');
}else{
    echo 'el directorio ya exite';
}

//Directorio
//rmdir('nuevoDirectorio');

// listar contenido de directorio

echo "<h1>contenido del directorio</h1>";

if($gestor = opendir('mi_carpeta')){
    while(false !== ($archivo = readdir($gestor))){
        if($archivo != '.' && $archivo != '..'){
            echo $archivo."<br>";
        }
    }
}