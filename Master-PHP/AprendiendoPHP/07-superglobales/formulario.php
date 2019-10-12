<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario en PHP</title>
</head>
<body>
    <h1>Formulario en PHP</h1>

    <form action="recibir.php" method="POST  ">

        <p>
            <label for="campoNombre">nombre</label>
            <input type="text" name="campoNombre" id="">
        </p>
        <p>
            <label for="campoApellido">Apellidos</label>
            <input type="text" name="campoApellido" id="">
        </p>
        <input type="submit" value="enviar">

    </form>
</body>
</html>