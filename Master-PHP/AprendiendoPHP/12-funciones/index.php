<?php


/**FUNCIONES 
 * Una funcion es un conjunto de instrucciones agrupadas bajo
 * un nombre concreto y que pueden reutilizarse solamente invocando
 * a la funcion tantas veces como sea ncesario
 * 
 * function nombreDeLaFuncion($parametros){
 * 
 * Bloque / Conjunto de instrucciones
 * }
 * 
 * 
*/

//Ejmeplo1.  Imprimir cuatro items en pantalla

function muestraNombres(){
    echo "Victor Robles <br/>";
    echo "Carlos Mora <br/>";
    echo "Federico Mora <br/>";
    echo "Alberto Lopez <br/>";
}

//muestraNombres();

function tabla($numero){
    echo "<h4> Tabla de multiplicar para $numero: </h4>";
    for($i = 0; $i <= 10; $i++){
        echo "$numero X $i = ".($i*$numero).'<br/>';
    }
}

tabla(4787424);

//Ejemplo2

// function calculadora($numero1, $numero2){
//     $suma = $numero1+$numero2;
//     $resta = $numero1-$numero2;
//     $multiplicacion = $numero1*$numero2;
//     $division = $numero1/$numero2;

//     echo "El resultado de la suma es: $suma<br/>";
//     echo "El resultado de la Resta es: $resta<br/>";
//     echo "El resultado de la multiplicación es: $multiplicacion<br/>";
//     echo "El resultado de la División es: $division<br/>";
// }

// calculadora(40, 12);

echo "<hr>";

echo "<h2>Misma calculadora pero usando return</h2>";

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

function calcular($valor1, $valor2){
    $resultado = "Este es el resultado";
    $resultado .= suma($valor1, $valor2)."<br/>";
    $resultado .= resta($valor1, $valor2)."<br/>";
    $resultado .= multiplicacion($valor1, $valor2)."<br/>";
    $resultado .= division($valor1, $valor2)."<br/>";
    return $resultado;

}
echo calcular(20,30);
?>