<?php

session_start();

echo '<h1> el numero de sesion es: '.$_SESSION['numero']. '</h1>';

header("Refresh: 2, URL=ejercicio1.php ");
?> 