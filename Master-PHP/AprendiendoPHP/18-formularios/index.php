<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formularios php y html</title>
</head>
<body>
    <h1>Formulario</h1>
    <form action="" method="POST" enctype="multipart/form-data">
        Nombre: <input type="text" name="nombre" id=""><br/>
        Apellido: <input type="text" name="apellido" id="">
        <input type="submit" value="Enviar">

<?php //echo $_POST['nombre'];?>
    </form>
</body>
</html>