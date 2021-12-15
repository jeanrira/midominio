<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 87 </title>
</head>
<body>
    <?php
    // Creamos una funcion que recoja el array
        function impares($valor){
        // Utilizamos un operador if para que si el valor es impar lo guarde en un array
        if ($valor % 2 != 0){
            $impares = array ($valor);
        }
        // E Imprimimos el array
        return $impares;
    }
    ?>
</body>
</html>