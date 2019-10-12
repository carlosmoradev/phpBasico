<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>subir archivos php</title>
</head>
<body>
    <h1>subir archivos con php</h1>
    <form action="upload.php" enctype="multipart/form-data" method="post">
        <input type="file" name="archivo" id="">
        <input type="submit" value="Enviar">
    </form>

    <h1>Listado de Imágenes</h1>
    <?php
    $gestor = opendir('./images');
if($gestor){
    while(($image = readdir($gestor)) !== false){
        if($image != '.' && $image != '..'){
            echo "<img src='images/$image' width='200px' /><br/>";
        }
    }
}
    ?>
</body>
</html>