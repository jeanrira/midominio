<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 84 </title>
</head>
<body>
    <?php
    // Creamos una funcion con los parametros necesarios, agregandole un "=" al lado de los valores por omision
    function capacidad($cilindros, $cabezas, $sectores, $tamanyo=512){
        // Realizamos las operaciones aritmeticas necesarias
        $capacidad = $cilindros * $cabezas * $sectores * $tamanyo;
        // E Imprimimos por pantalla el resultado
        return $capacidad;
    }
    ?>
</body>
</html>