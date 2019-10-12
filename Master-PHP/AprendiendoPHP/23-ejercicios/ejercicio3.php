<?php

/**Ejercicio3
 * Hacer una interfaz de usuario (formulario) con dos inputs y 4
 * botones:
 * -sumar
 * -restar
 * multiplicar
 * -dividir
 */

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
$sum = $_POST['sum'];
$res = $_POST['res'];
$mul = $_POST['mul'];
$div = $_POST['div'];




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>calculadora</title>
</head>
<body>
    <h1>Calculadora en php</h1>
    <p>Se reciben dos numeros y se ejecuta con ellos las cuatro operaciones básicas.</p>
    <form action="" method="post">
        <label for="valor1">Primer Valor</label><br/>
        <input type="number" name="valor1" id=""><br/>
        <label for="valor2">Segundo Valor</label><br/>
        <input type="number" name="valor2" id=""><br/>
        <input type="submit" value="Sumar" name="sum">
        <input type="submit" value="Restar" name="res">
        <input type="submit" value="Multiplicar" name="mul">
        <input type="submit" value="Dividir" name="div">

    </form>

    <?php
    
    if(isset($sum)){
        $resultado = "La suma es: ".suma($valor1, $valor2);
        echo $resultado;
    }
    
    if(isset($res)){
        $resultado = "La resta es: ".resta($valor1, $valor2);
        echo $resultado;
    }
    
    if(isset($mul)){
        $resultado = "La Multiplicacion es: ".multiplicacion($valor1, $valor2);
        echo $resultado;
    }
    
    if(isset($div)){
        $resultado = "La division es: ".division($valor1, $valor2);
        echo $resultado;
    }

    ?>
</body>
</html>