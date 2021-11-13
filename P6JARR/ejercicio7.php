<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7</title>
</head>
<body>
    <?php
        $array7[0]=10;
        $array7[1]=1;
        $array7[2]=2;
        $array7[3]=3;
        $array7[4]=-1;
        $array7[5]=0;
        $array7[6]=5;

        $i=0;
        while ($i<count($array7) && $array7[$i]  != 0){
            if ($array7[$i] > 0){
                echo "$array7[$i] es un numero positivo<br/>";
            }
            else {
                echo "$array7[$i] es un numero negativo<br/>";
            };
            $i++;
        }
    ?>
</body>
</html>