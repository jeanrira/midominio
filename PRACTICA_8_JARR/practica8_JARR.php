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
        return $hello . " " . $name;
    }
    // Final de Funciones
    // Inicio de Arrays
    $amigos = array ("Esteban", "Angel", "Andres", "Jhonnatan", "Juan", "Ernesto", "Manolo", "Samuel", "Santiago", "Luis");

    $amigas = array ("Victoria", "Valeria", "Valeria", "Dennesy", "Katherine", "Andrea", "Isabella", "Maria", "Shantall", "Silvana");

    $amistades = array_merge($amigos, $amigas);
    sort($amistades);
    $amistades2 = array_unique($amistades);
    //  Final de Arrays
    $hola = 'Hola';
    $nombre = 'Jesus';
    $string = 'El perro de San Roque no tiene rabo';
    $string2 = substr(strstr("$string"," "), 7);
    echo saludo ($hola, $nombre);
    echo "<br/><br/>$string";
    echo "<br/>$string2";
    echo "<br/>Se han recortado ". strlen($string) - strlen($string2)." Caracteres";
    echo "<br/><br/>".strtoupper($string);
    echo "<br/>".strtolower($string);
    echo "<br/><br/>".str_replace('perro', 'gato', $string);
    echo "<br/><br/>Tengo ". count($amistades). " amistades";
    echo "<br/><br/>Hay un Juan en la posicion ".array_search('Juan', $amistades). " del array";
    echo "<br/><br/>";
    print_r(array_values($amistades2));
    echo "<br/><br/>";
    $repetidos= array_diff_key ($amistades,$amistades2);
    echo "Los nombres repetidos son los siguientes: ". implode ($repetidos);
    ?>
</body>
</html>