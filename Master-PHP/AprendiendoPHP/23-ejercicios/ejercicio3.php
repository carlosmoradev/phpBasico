<?php

/**Ejercicio3
 * Hacer una interfaz de usuario (formulario) con dos inputs y 4
 * botones:
 * -sumar
 * -restar
 * multiplicar
 * -dividir
 */

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
    <form action="ejercicio3_calculadora.php" method="post">
        <label for="valor1"></label>
        <input type="number" name="valor1" id="">
        <label for="valor2"></label>
        <input type="number" name="valor2" id="">
        <input type="submit" value="Sumar" name="sum">
        <input type="submit" value="Restar" name="res">
        <input type="submit" value="Multiplicar" name="mul">
        <input type="submit" value="Dividir" name="div">

    </form>
</body>
</html>