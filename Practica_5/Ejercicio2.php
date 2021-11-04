<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica 5 - Ejercicio 2 JARR</title>
</head>
<body>
    <?php
    $codigo = 1;
    $nombre = "Tom";
    $apellido = "Smith";
    $puesto = "Vendedor";
    $sueldo = 75000;
    $edad = 26;
    $num_hijos = 0;
    $sucursal = "New York";

    // Retencion 1
    if ($puesto = "Vendedor" && $sueldo > 70000){
        echo "Retención 1 = " . $sueldo * 0.10 . "<br/>";
        $retencion1 = $sueldo * 0.10;
        echo "Sueldo despues de Retencion 1: " . $sueldo - $retencion1 . "</br></br>";
    }
    else {
        echo "Retención 1 =" . $sueldo * 0.20."<br/>";
        $retencion1 = $sueldo * 0.20;
        echo "Sueldo despues de Retencion 1: " . $sueldo - $retencion1 . "</br></br>";
    }

    //Retencion 2
    if ($edad > 50 || $num_hijos > 2){
        echo "Retención 2 =" . $sueldo * 0.05."<br/>";
        $retencion2 = $sueldo * 0.05;
        echo "Sueldo despues de Retencion 2: " . $sueldo - $retencion2 . "</br></br>";
    }
    else {
        echo "Retención 2 =" . $sueldo * 0.10."<br/>";
        $retencion2 = $sueldo * 0.10;
        echo "Sueldo despues de Retencion 2: " . $sueldo - $retencion2 . "</br></br>";
    }

    //Retencion 3
    if ($sueldo > 50000 && $sueldo < 80000){
        echo "Retención 3 =" . $sueldo * 0.05."<br/>";
        $retencion3 = $sueldo * 0.05;
        echo "Sueldo despues de Retencion 3: " . $sueldo - $retencion3 . "</br></br>";
    }
    else {
        echo "Retención 3 =" . $sueldo * 0.12."<br/>";
        $retencion3 = $sueldo * 0.12;
        echo "Sueldo despues de Retencion 3: " . $sueldo - $retencion3 . "</br></br>";
    }

    //Retencion 4
    if ($num_hijos == 1 || $num_hijos == 2){
        echo "Retención 4 =" . $sueldo * 0.10."<br/>";
        $retencion4 = $sueldo * 0.10;
        echo "Sueldo despues de Retencion 4: " . $sueldo - $retencion4 . "</br></br>";
    }
    else {
        echo "Retención 4 =" . $sueldo * 0.05."<br/>";
        $retencion4 = $sueldo * 0.05;
        echo "Sueldo despues de Retencion 4: " . $sueldo - $retencion4 . "</br></br>";
    }

    //Retencion 5
    if ($sueldo > 80000 || $num_hijos == 0){
        echo "Retención 5 =" . $sueldo * 0.15."<br/>";
        $retencion5 = $sueldo * 0.15;
        echo "Sueldo despues de Retencion 5: " . $sueldo - $retencion5 . "</br></br>";
    }
    else {
        echo "Retención 5 =" . $sueldo * 0.05."<br/>";
        $retencion5 = $sueldo * 0.05;
        echo "Sueldo despues de Retencion 5: " . $sueldo - $retencion5 . "</br></br>";
    }

    echo "</br></br><b>Sueldo total despues de Retenciones: </b>" . $sueldo - $retencion1 - $retencion2 - $retencion3 - $retencion4 - $retencion5;

    ?>
</body>
</html>