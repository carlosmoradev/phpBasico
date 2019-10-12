<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Recibe formulario</title>
</head>
<body>
    <p>aqui llega la info del formulario</p>
    <?php
    var_dump($_POST); 
    
    $nombre = $_POST['campoNombre'];
    $apellido = $_POST['campoApellido'];

    echo "Hola $nombre $apellido";

    ?>
</body>
</html>