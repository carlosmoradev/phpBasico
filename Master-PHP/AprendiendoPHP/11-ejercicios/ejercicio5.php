<?php



if(isset($_GET['numero1']) && isset($_GET['numero2'])){

    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];

    if($numero1 > $numero2){
        for($i = $numero1; $i >= $numero2; $i--){
            echo $i."<br/>";
        }
    }elseif($numero1 <= $numero2){
        for($i = $numero1; $i <=$numero2; $i++){
            echo $i."<br/>";
        }
    }

}else{
    echo "Ingresa los numeros por la url";
}

?>