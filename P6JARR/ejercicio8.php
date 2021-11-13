<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8</title>
</head>
<body>
    <?php
        $array8[0]=10;
        $array8[1]=1;
        $array8[2]=2;
        $array8[3]=3;
        $array8[4]=-1;
        $array8[5]=0;
        $array8[6]=5;

        $i=0;
        while ($i<count($array8) && $array8[$i]  != 0 && $array8[$i] > 0){
            if ($array8[$i] % 2 == 0){
                echo "$array8[$i] es un numero par<br/>";
            }
            else {
                echo "$array8[$i] es un numero impar<br/>";
            };
            $i++;
        }
    ?>
</body>
</html>