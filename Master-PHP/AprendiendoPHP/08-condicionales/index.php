<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Condicionales en PHP</title>
</head>
<body>
<h1>Condicionales en PHP</h1>
<?php
/*
Condicionales
if(condicion){
    instrucciones
}else{
    otras instrucciones
}

OPERADORES DE COMPARACION:

== igual
=== identico
!= diferente
<> diferente
!== no identico
< menor que
> mayor que 
>= mayor o igual que

*/

//Ejemplo1

$color = "rojo1";

if($color == "rojo"){
    echo 'El color el rojo'.'<br>';
}else{
    echo 'el color es otro'.'<br>';
}


// Ejemplo2

$year = 2019;

if($year >= 2019){
    echo "Estamos en el 2019".'<br>';
}else{
    echo "estamos en otro año".'<br>';
}


// Ejemplo3

$edad = 12;
$nombre = "Pedro Paramano";
$mayoria_edad = 18;

if($edad >= $mayoria_edad){
    echo "Puedes Acceder $nombre".'<br>';
}else{
    echo "Lo siento $nombre, eres menor de $mayoria_edad".'<br>';
}
echo "<hr>";
// ejercicio4

//Forma larga y poco practica para if secuenciales (anidados)

$dia = 72;

// if($dia == 1){
//     echo "Es Lunes";
// }else{
//     if($dia == 2){
//         echo "Es Martes";
//     }else{
//         if($dia == 3){
//             echo "es miercoles";
//         }else{
//             if($dia == 4){
//                 echo "es Jueves";
//             }else{
//                 if($dia == 5){
//                     echo "es Viernes";
//                 }else{
//                     if($dia == 6 ||$dia == 7){
//                         echo "es fin de semana!!";
//                     }
//                 }
//             }
//         }
//     }
// }


//Refactorizado con elseif

if($dia == 1){
    echo "Es Lunes";
}elseif($dia == 2){
    echo "es Martes";
}elseif($dia == 3){
    echo "es miercoles";
}elseif($dia == 4){
    echo "es jueves";
}elseif($dia == 5){
    echo "es viernes";
}else{
    echo "es fin de semana!";
}
echo '<hr>';
//Ejemplo 5.  Manejo de multiples condiciones


$edad1 = 18;

$edad2 = 64;

$edad_oficial = 17;

if($edad_oficial >= $edad1 && $edad_oficial <= $edad2){
    echo "Estas en edad de trabajar";
}elseif($edad_oficial < $edad1){
    echo "Aun eres muy joven para trabajar";
}else{
    echo "Ya es  tiempo de disfrutar de la jubilacion";
}

//Ejemplo 6 con switch
echo "<hr>";
echo "<h2>Ejemplo de listado de dia usando switch<h2>";

switch($dia){
    case 1: 
        echo "Es lunes";
    break;

    case 2:
        echo "Es martes";
    break;

    case 3: 
        echo "Es miercoles";
    break;

    case 4:
        echo "Es jueves";
    break;

    case 5: 
        echo "es Viernes";
    break;

    case 6:
    case 7:
        echo "es fin de semana \\o/";
    
    default:
        echo "Presta atencion e ingresa un dia valido";



}

?>

</body>
</html>