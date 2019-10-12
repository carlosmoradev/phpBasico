<?php

/**Ejercicio1
 * Crear una sesion que aumente su valor o disminuya en uno en funcion
 * de si el parametro get_counter esta en uno o en cero.
 */
session_start();

if(!isset($_SESSION['numero'])){
    $_SESSION['numero'] = 0;
}

if(isset($_GET['counter']) && $_GET['counter'] == 1){
    $_SESSION['numero']++;
}

if(isset($_GET['counter']) && $_GET['counter'] == 0){
    $_SESSION['numero']--;
}

?>

<h2>El valor de la sesion es: <?=$_SESSION['numero']?></h2>
<a href="ejercicio1.php?counter=1">Aumentar la sesion</a>
<a href="ejercicio1.php?counter=0">Disminuir la sesion</a>
<hr>
<a href="ejercicio1.alt.php">Estado de la sesion</a>