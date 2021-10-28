<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Básico (III)</title>
</head>
<body>
    <?php

    // $edad = 18;

    // if ($edad >= 18){
    //     echo "<h3>Soy mayor de edad</h3>";
    // }
    // else {
    //     echo "<h3>Soy menor de edad</h3>";
    // }

    $edad = 18;

    if ($edad >= 18)
        echo "<h3>Soy mayor de edad</h3>";
    else
        echo "<h3>Soy menor de edad</h3>";
    // Como solo es una instrucción no es necesario poner las llaves {}
    // Pero solo coge la primera instrucción, si pones otra debajo no entra en el else


    ?>
</body>
</html>