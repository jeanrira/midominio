<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 9</title>
</head>
<body>
    <?php
        $array9[1]=1;
        $array9[0]=10;
        $array9[2]=2;
        $array9[3]=3;
        $array9[4]=-1;
        $array9[5]=0;
        $array9[6]=5;

        $i=0;
        while ($i<count($array9) && $array9[$i] >= 0){
            $i++;
            echo "Se han introducido $i numeros<br/>";
        }
    ?>
</body>
</html>