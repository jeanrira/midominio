<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica 8_JARR</title>
</head>
<body>
    <?php
    // Inicio de Funciones
    function saludo($hello, $name){
        $string2 = substr(strstr($string," "), 1);
        return $hello . " " . $name;
    }
    // Final de Funciones
    $hola = 'Hola';
    $nombre = 'Jesus';
    $string = 'El perro de San Roque no tiene rabo';
    $string2 = null;
    echo saludo ($hola, $nombre);
    echo "<br/><br/>$string";
    echo substr(strstr("White Tank Top"," "), 1);
    ?>
</body>
</html>