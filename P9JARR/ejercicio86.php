<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 86 </title>
</head>
<body>
    <?php
    // Creamos una funcion con 3 parametros
        function mayor($num1, $num2, $num3){
        // Utilizamos la funcion max para que detecte el numero mayor
        $mayor = max($num1, $num2, $num3);
        // E Imprimimos por pantalla el resultado
        return $mayor;
    }
    ?>
</body>
</html>