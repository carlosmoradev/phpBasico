<?php

echo "<h2>bucles en php </h2>";


/* Bucle WHILE
Estructura de control que itera o repite la ejecucion de una seria de
instrucciones tanta veces como sea necesario, basada en una condicion.

while(condicion){
    bloque de instrucciones
    instrucciones adicionales
}

*/

echo "<h3>bucle while para mostrar numeros del uno al diez</h3>";

$numero = 1;

while($numero <= 10){
    echo $numero;
    echo "<br>";
    $numero++;

}
echo "<hr>";


//Ejemplo2.  Tabla de multiplicar de numero pasado por GET


if(isset($_GET['numero'])){ //!El iffset() busca si la variable existe
    //Cambiar el tipo de numero
    $numero = (int)$_GET['numero']; //!se "castea" pasandolo a tipo numero
}else{
    $numero = 1;
}

$multiplo = 0;

while($multiplo <= 10){
    echo"$numero X $multiplo = ".($numero *  $multiplo).'<br>';
    $multiplo++;
}
/*
Bucle do-While.  Es igual al while pero se ejecuta al menos una vez siempre

do {
} while ($a <= 10);
    # code...

*/

?>