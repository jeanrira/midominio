<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>
<body>
    <?php
      $cuenta = 1;

      while ($cuenta < 100){
        if ($cuenta % 5 == 0){
        $cuenta++;
        };
      echo $cuenta++."</br>";
      }
    ?>
</body>
</html>