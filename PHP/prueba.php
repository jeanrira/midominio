<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba PHP</title>
</head>

<body>
    <h1>PRUEBA</h1>
    <h1> <?php echo "Bienvenido al Tema 3"; ?> </h1>
    <h2> Curso de 2ª de ASIR </h2>
    <p> Título <?php echo "Programación en php"; ?> </p>

    <?php
    define('PRIMERDIADELASEMANA', 'Lunes');

    $texto = " <h3> Que dia es hoy </h3> ";
    echo $texto;
    echo PRIMERDIADELASEMANA;
    echo "</br>";
    echo "</br>";
    echo $_SERVER['SERVER_NAME'];
    echo "\"merbichobruja\"";
    echo $texto.PRIMERDIADELASEMANA. "beh";
    ?>
</body>

</html>