<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 82 </title>
</head>
<body>
    <?php
    // Creamos una funcion con que pida el numero de categoria
    function departamento($numcat){
        // Creamos un array con los departamentos
        $dept = array (null, 'Gerente y Direccion.', 'Informatico, Ingeniero, Tecnicos.', 'Administracion, Ventas, Almacen.', 'Peon y Ayudante');
        $departamento = $dept[$numcat];
        // E Imprimimos por pantalla el resultado correspondiente
        return $departamento;
    }
    echo departamento(1);
    ?>
</body>
</html>