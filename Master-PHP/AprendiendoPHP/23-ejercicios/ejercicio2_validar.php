<?php

$correo = $_GET['email'];


function validarEmail($correo){
    if(empty($correo)){
        echo "Correo vacio";
    }
    elseif(!filter_var($correo, FILTER_VALIDATE_EMAIL) ){
        $estado = "Verifique el correo";
        }else{
        $estado =  "El correo ingresado es: ".$correo;
        }
        echo $estado;
}

validarEmail($correo);

?>