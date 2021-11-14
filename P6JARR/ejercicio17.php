<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 17</title>
</head>

<body>
    <?php
    $array17[0][0] = "Pepe";
    $array17[1][0] = "Luis";
    $array17[2][0] = "Manuel";
    $array17[3][0] = "Andres";
    $array17[4][0] = "Esteban";
    $array17[0][1] = 500;
    $array17[1][1] = 1500;
    $array17[2][1] = 1100;
    $array17[3][1] = 900;
    $array17[4][1] = 800;
    $conta = 0;
    $mas1000 = 0;
    $suma = 0;
    while ($conta < count($array17)) {
        $suma = $suma + $array17[$conta][1];
        if ($array17[$conta][1] > 1000) {
            $mas1000 = $mas1000 + 1 ;
            echo $array17[$conta][0] . " cobra más de 1000<br>";
        };
        $conta++;
    }
    echo "La suma de los sueldos es igual a: $suma <br/>";
    echo "Son $mas1000 los que cobran más de 1000";
    ?>
</body>

</html>