<?php

/**SESIONES
 * 
 * Las sesiones gestionan el periodo de tiempo durante el cual un usuario se puede mantener
 * autenticado en la pagina sin necesidad de volverse a autenticar.  La informacion del usuario
 * se mantiene persistente hasta que se cierre la sesion
 */

// Inicio de sesion
session_start();

$variable_normal = "soy una cadena de texto"; /**variable local */

$_SESSION['variable_persistente'] = "Sesion activa"; /**variable de sesion - persiste en todo el dominio */

echo $variable_normal."<br/>";
echo $_SESSION['variable_persistente'];
?>