<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>
    <?php
// Creamos el Array y tambien creamos todas las variables necesarias para los ejercicios
    $libro =	array(61,84,34,59,40,41,2,65,19,95,19,86,78,66,19,69,31,22,65,22,37,8,4,45,27);
    $i = 0;
    $ej1 = 0;
    $ej2 = 0;
    $ej21 = 0;
    $ej3 = 0;
    $ej31 = 0;
    $ej4 = 0;

// Utilizamos un bucle while que le sume uno a una varible i cada vez que se ejecuta
    while ($i < count($libro)) {
        // 2.1 Si el resto de la division del numero del bucle da cero significa que es par y se le suma el valor del array a la variable ej1
        if ($i % 2 == 0) {
            $ej1= $ej1 + $libro[$i];
        }
        // 2.2 Si el resto de la division del numero del bucle es distinto de cero significa que es impar y se le suma el valor del array a la variable ej2
        // Tambien se le suma uno a la variable ej21 para sacar la media
        if ($i % 2 != 0) {
            $ej2= $ej2 + $libro[$i];
            $ej21++;
        }
        // 2.3 Si el resto de la division entre el valor del Array y 2 da cero significa que es par y se le suma el valor del array a la variable ej3
        // Tambien se le suma uno a la variable ej31 para sacar la media
        if ($libro[$i] % 2 == 0) {
            $ej3 = $ej3 + $libro[$i];
            $ej31++;
        }
        // 2.4 Si el resto de la division entre el valor del Array y 2 es distinto de cero significa que es impar y se le suma el valor del array a la variable ej4
        if ($libro[$i] % 2 != 0) {
            $ej4 = $ej4 + $libro[$i];
        }
        $i++;
    }
    // Una vez terminado el bucle se imprimen los valores por pantalla, haciendo las operaciones aritmeticas necesarias
    echo "2.1 La suma de todos los números escritos en las páginas pares es igual a = $ej1 <br/>";
    echo "2.2 La media de los números escritos en las páginas impares es igual a = ". $ej2 / $ej21. "<br/>";
    echo "2.3 La media de todos los números que son pares de todo el libro es igual a = ". $ej3 / $ej31. "<br/>";
    echo "2.4 La suma de todos los números que son impares de todo el libro es igual a = $ej4 <br/>";
    ?>
</body>
</html>