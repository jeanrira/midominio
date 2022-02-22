<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcion</title>
</head>
<body>
    <?php
        function suma ($num1, $num2){
        //    Añades aquí ^ un & y te cambia el valor de la variable por fuera de la funcion
            $num1++;
            return $num1+$num2;
            // Despues del return ya no se ejecuta más la funcion
        }

    // echo suma(1,2);
    // echo "<br/>";
    $v1 = 5;
    $v2 = 6;
    $resultado = suma($v1, $v2);
    echo $resultado;
    echo "<br/>";
    echo "v1 ahora vale $v1";
    ?>
</body>
</html>