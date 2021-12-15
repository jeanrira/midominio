<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 83 </title>
</head>
<body>
    <?php
    // Creamos una funcion a la que le pasamos los parametros
    function func($array [0], $valor){
        // Creamos una variable llamada resultado
        $resultado = null;
        // Utilizamos un operador if para comprobar la variable valor
        if (isset($valor)) {
            $resultado = $valor;
        }
        else {
            $resultado = "false";
        };
        // Devolvemos el resultado por pantalla
        return $resultado;
    }
    ?>
</body>
</html>