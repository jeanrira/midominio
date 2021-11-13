<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 10</title>
</head>
<body>
    <?php
        $array10[0]=1;
        $array10[1]=10;
        $array10[2]=2;
        $array10[3]=3;
        $array10[4]=-1;
        $array10[5]=0;
        $array10[6]=5;

        $i=0;
        $suma=0;
        while ($i<count($array10) && $array10[$i] >= 0){
            $suma=$array10[$i]+$suma;
            echo "EL valor de la suma es: $suma<br/>";
            $i++;
        }
    ?>
</body>
</html>