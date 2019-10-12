<?php

//Funciones de operaciones basicas
function suma($valor1, $valor2){
    return $valor1+$valor2;
}
function resta($valor1, $valor2){
    return $valor1-$valor2;
}
function multiplicacion($valor1, $valor2){
    return $valor1*$valor2;
}
function division($valor1, $valor2){
    return $valor1/$valor2;
}

//Valores recibidos por post
$valor1 = $_POST['valor1'];
$valor2 = $_POST['valor2'];

if(isset($_POST['sum'])){
    $resultado = "La suma es: ".suma($valor1, $valor2);
    echo $resultado;
}

if(isset($_POST['res'])){
    $resultado = "La resta es: ".resta($valor1, $valor2);
    echo $resultado;
}

if(isset($_POST['mul'])){
    $resultado = "La Multiplicacion es: ".multiplicacion($valor1, $valor2);
    echo $resultado;
}

if(isset($_POST['div'])){
    $resultado = "La division es: ".division($valor1, $valor2);
    echo $resultado;
}

?>