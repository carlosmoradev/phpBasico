<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Validacion de formularios en PHP</title>
</head>
<body>
    <h1>Validar formulario en PHP</h1>

    <?php
        if(isset($_GET['error'])){
            $error = $_GET['error'];

            if($error == 'faltan_valores'){
                echo '<strong style="color:red">Introduce los datos en todos los campos del
                formulario</strong>';
            }

            if($error == 'nombre'){
                echo '<strong style="color:red">Verifica el nombre</strong>';
            }

            if($error == 'apellido'){
                echo '<strong style="color:red">Verifica el apellido</strong>';
            }

            if($error == 'edad'){
                echo '<strong style="color:red">verifica la edad</strong>';
            }

            if($error == 'email'){
                echo '<strong style="color:red">ingresa un correo valido</strong>';
            }

            if($error == 'pass'){
                echo '<strong style="color:red">verifica el password</strong>';
            }
        }
    ?>

    <form action="procesar_formulario.php" method="POST">
        <label for="nombre">Nombre: </label><br>
        <input type="text" name="nombre" id="" ><br>

        <label for="apellido">Apellido:</label><br>
        <input type="text" name="apellido" id="" ><br>

        <label for="edad">Edad:</label><br>
        <input type="number" name="edad" id="" ><br>

        <label for="pass">Contraseña:</label><br>
        <input type="password" name="pass" id="" ><br>

        <label for="email">Correo electronico:</label><br>
        <input type="email" name="email" id="" ><br>

        <input type="submit" value="Enviar"><br>

    </form>
</body>
</html>