<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 81 </title>
</head>
<body>
    <?php
    // Creamos una funcion con los parametros necesarios, agregandole un "=" al lado de los valores por omision
    function impFinal($precio, $unidades, $iva=21, $desc=0){
        // Realizamos las operaciones aritmeticas necesarias
        $bruto = $precio * $unidades;
        $tax = $bruto * ($iva/100);
        $neto = $bruto + $tax;
        $desc2 = $neto * ($desc/100);
        $impfinal= $neto - $desc2;
        // E Imprimimos por pantalla el resultado
        return $impfinal;
    }
    ?>
</body>
</html>