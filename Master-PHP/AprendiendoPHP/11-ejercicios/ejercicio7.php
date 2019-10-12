<?php

/**Ejercicio7.
 * Hacer un programa que muestre todos los numeros IMPARES entres
 * dos numeros que lleguen por url($_GET).
 */

if(isset($_GET['numero1']) && isset($_GET['numero2'])){

    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];

    if($numero1 > $numero2){
        for($i = $numero1; $i >= $numero2; $i--){
            if($i%2 != 0){
            echo $i."<br/>";
        }
        }
    }elseif($numero1 <= $numero2){
        for($i = $numero1; $i <=$numero2; $i++){
            if($i%2 != 0){
            echo $i."<br/>";
            }
        }
    }

}else{
    echo "Ingresa los numeros por la url";
}

?>