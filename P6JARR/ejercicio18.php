<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 18</title>
</head>

<body>
    <?php
    $array18[0][0] = 44;
    $array18[1][0] = 25;
    $array18[2][0] = 21;
    $array18[3][0] = 20;
    $array18[4][0] = 20;
    $array18[0][1] = 1.90;
    $array18[1][1] = 1.70;
    $array18[2][1] = 1.80;
    $array18[3][1] = 1.78;
    $array18[4][1] = 1.74;
    $conta = 0;
    $edadmedia = 0;
    $estaturamedia = 0;
    $mayor18 = 0;
    $altos = 0;
    while ($conta < count($array18)) {
        $edadmedia = $edadmedia + $array18[$conta][0];
        $estaturamedia = $estaturamedia + $array18[$conta][1];
        if ($array18[$conta][0] >= 18) {
            $mayor18++;
        };
        if ($array18[$conta][1] >= 1.75) {
            $altos++;
        };
        $conta++;
    }
    echo "La edad media de los alumnos es igual a: ". $edadmedia / $conta . "<br/>";
    echo "La estatura media de los alumnos es igual a: ". $estaturamedia / $conta . "<br/>";
    echo "Hay $mayor18 alumnos mayores de 18 años<br/>";
    echo "Hay $altos alumnos que miden más de 1,75M<br/>";
    ?>
</body>

</html>