<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recibe Datos</title>
</head>
<body>
    <?php
    $nombre = $_GET["nameform"];
    $apellido = $_GET["lnameform"];

    echo "hello, como estai ".$nombre .$apellido;
    ?>
</body>
</html>