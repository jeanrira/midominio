<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estructuras Repetitivas</title>
</head>
<body>
    <?php
   $i=1;
   while ($i <= 10){
        echo "Antes" . $i . "<br/>";
        echo $i++ . "<br/>";
        echo "Despues" . $i . "<br/>";
    }

    ?>
</body>
</html>