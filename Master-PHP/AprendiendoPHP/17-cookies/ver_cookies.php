<?php

/**$_COOKIE es una variable superglobal que me permite visualizar el contenid de la cookie */

if(isset($_COOKIE['galletita'])){
    echo "<h1>".$_COOKIE['galletita']."</h1><br/>";
}else{
    echo "No existe la cookie";
}

if(isset($_COOKIE['unYear'])){
    echo "<h1>".$_COOKIE['unYear']."</h1><br/>";
}else{
    echo "No existe la cookie";
}

?>

<a href="borrar_cookies.php">borrar galletitas</a>
<a href="crear_cookies.php">crear galletitas</a>
