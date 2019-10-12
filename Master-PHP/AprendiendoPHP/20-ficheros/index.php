<?php

//Abrir archivo
$archivo = fopen("fichero_texto.txt", "a+");

//Leer contenido
while(!feof($archivo)){
$contenido = fgets($archivo);
echo $contenido."<br/>";
}

//escribir en archivo

//fwrite($archivo, "fuckyeah! \n");

//Cerrar archivo
fclose($archivo);

//Copiar archivo

// copy('fichero_texto.txt', 'fichero_copiado.txt') or die("error al copiar");

//Renombrar archivo

// rename('fichero_copiado.txt', 'fichero_renombrado.md');

//Borrar archivo
// nlink('fichero_renombrado.md') or die('error al borrar');

if(file_exists('fichero_texto2.txt')){
    echo "El archivo existe";

}else {
    echo "EL ARCHIVO NO EXISTE";
}

?>