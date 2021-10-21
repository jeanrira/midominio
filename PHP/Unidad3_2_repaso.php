<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unidad3_2_repaso</title>
</head>
<body>
    <?php
    $VAR1 = 25;
    $VAR2 = "veinticinco";
    define('CONST1', 3.14159);

    echo "<h3> Variable 1: </h3>";
    echo $VAR1;
    echo "</br>";
    echo gettype ($VAR1);
    echo "</br>";
    echo "</br>";

    echo "<h3> Variable 2: </h3>";
    echo $VAR2;
    echo "</br>";
    echo gettype ($VAR2);
    echo "</br>";
    echo "</br>";

    echo "<h3> Constante 1: </h3>";
    echo CONST1;
    echo "</br>";
    echo gettype ('CONTS1');
    ?>
</body>
</html>