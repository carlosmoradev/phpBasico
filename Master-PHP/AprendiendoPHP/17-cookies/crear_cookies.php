<?php

/**cookies
 * 
 * Toda la informacion queda almacenada en el cliente
 * 
 * 
 */



 //crear cookies
//  set_cookie("nombre", "valor que solo puede ser texto", caducidad, ruta, dominio);

setcookie("galletita", "valor de galletita");

//Cookie con expiracion
setcookie("unYear", "valor de mi cookie de 365", time()+(60*60*24*365)); /**valida por un año */


header('location:ver_cookies.php');
?>
