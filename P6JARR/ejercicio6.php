<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6</title>
</head>
<body>
    <?php
        $array6[0]=0;
        $array6[1]=1;
        $array6[2]=2;
        $array6[3]=3;
        $array6[4]=-1;
        $array6[5]=5;

        $i=0;
        while ($i<count($array6) && $array6[$i] >= 0){
            echo "El cuadrado de $array6[$i] es: ".$array6[$i]*$array6[$i]."<br/>";
            $i++;
        }
    ?>
</body>
</html>