<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 11</title>
</head>
<body>
    <?php
        $array11[0]=1;
        $array11[1]=10;
        $array11[2]=2;
        $array11[3]=3;
        $array11[4]=-1;
        $array11[5]=0;
        $array11[6]=5;

        $i=0;
        $suma=0;
        while ($i<count($array11) && $array11[$i] >= 0){
            $suma=$array11[$i]+$suma;
            $i++;
            echo "EL valor de la media es: ". $suma / $i ."<br/>";
        }
    ?>
</body>
</html>