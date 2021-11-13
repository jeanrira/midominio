<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 16</title>
</head>
<body>
    <?php
        $array16[0]=10;
        $array16[1]=1;
        $array16[2]=2;
        $array16[3]=3;
        $array16[4]=-1;
        $array16[5]=0;
        $array16[6]=5;
        $array16[7]=4;
        $array16[8]=8;
        $array16[9]=9;

        $i=1;
        $pst = 0;
        $contpst = 0;
        $ngt = 0;
        $contngt = 0;
        $contcero = 0;

        while ($i<count($array16)){
            if ($array16[$i] > 0){
                $pst=$array16[$i] + $pst;
                $contpst++;
            }
            elseif ($array16[$i] < 0){
                $ngt=$array16[$i] + $ngt;
                $contngt++;
            }
            elseif ($array16[$i] == 0){
                $contcero++;
            }
            elseif ($i = 10){
                echo "La media de los numeros positivos es: ".$pst / $contpst."<br/>";
                echo "La media de los numeros negativos es: ".$ngt / $contngt."<br/>";
                echo "La cantidad de ceros en el array es de: $contcero<br/>";
            };
            $i++;
        }
    ?>
</body>
</html>