<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica 4 JARR</title>
</head>
<body>
    <?php
    echo "<h3>Crear dos variables de cada tipo</h3>";
     $VAR1 = 18;
     $VAR2 = 'DIECIOCHO';
     $VAR3 = 123.456;
     $VAR4 = 20;
     $VAR5 = 'VEINTE';
     $VAR6 = 789.101;

    echo "<h3>Crear dos variable constantes</h3>";
     define("CONST1", 1.2345);
     define("CONST2", "CadenaDeCaracteres");

    echo "<h3>Muestra que existen las dos variable constantes</h3>";
     echo "<p>La constante 1 es </p>"; echo CONST1;
     echo ", está definidad la constante 1? ".defined ('CONST1');
     echo "<p>La constante 2 es </p>"; echo CONST2;
     echo ", está definidad la constante 2? ".defined ('CONST2');

    echo "<h3>Juntar las variables de texto</h3>";
     echo $VAR2.CONST2.$VAR5;
     $VARTXT = $VAR2.CONST2.$VAR5;

    echo "<h3>Sumar las variables de números</h3>";
     echo $VAR1 + CONST1 + $VAR3 + $VAR4 + $VAR6;
     $VARSUM = $VAR1 + CONST1 + $VAR3 + $VAR4 + $VAR6;

    echo "<h3>Divide las variables de números</h3>";
     echo $VAR1 / CONST1 / $VAR3 / $VAR4 / $VAR6;
     $VARDIV = $VAR1 / CONST1 / $VAR3 / $VAR4 / $VAR6;

    echo "<h3>Muestra el resto de las variables de números</h3>";
     echo $VAR1 % CONST1 % $VAR3 % $VAR4 % $VAR6;
     $VARREST = $VAR1 % CONST1 % $VAR3 % $VAR4 % $VAR6;

    echo "<h3>Juntar los 4 puntos anteriores en una frase final</h3>";
     echo "<p>Si juntamos las variables de texto el resultado es: ".$VARTXT.
     ", si sumamos las variables de numero el resultado es: ".$VARSUM.
     ", si dividimos las variables de numero el resultado es: ".$VARDIV.
     ", y por último, si mostramos el resto de las variables de numero el resultado es:  "
     .$VARREST.".</p>";

    echo "<h3>Asignar a una variable numérica la división de la misma con otra variable numérica</h3>";
    $VAR6ANTES = $VAR6;
    $VAR6 = $VAR6 / $VAR4 ;

    echo $VAR6;

    // $VAR10 = $VAR4 / $VAR4 ;
    // $VAR11 = $VAR10 / $VAR1 ;
    //(X=X)/Y
    echo "<h3>Vuelve a asignarle el valor inicial a la variable modificada</h3>";
    $VAR6 = $VAR6ANTES;

    echo $VAR6;

    echo "<h3>Asignar a una variable numérica la multiplicación de la misma con otra variable numérica</h3>";
    $VAR6 = $VAR6 * $VAR4;

    echo $VAR6;

    ?>
</body>
</html>