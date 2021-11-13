<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 15</title>
</head>
<body>
    <?php
    $n = 6;
    $cuenta = $n;
    $fact=1;

    while($cuenta>=1){
        echo $fact."x".$cuenta."=";
        $fact=$fact * $cuenta;
        $cuenta--;
        echo "$fact<br/>";
    }
    ?>
</body>
</html>