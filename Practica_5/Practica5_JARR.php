<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica 5 JARR</title>
</head>
<body>
    <?php
    $prod1 = "Teclado";
    $precio1 = 20;
    $und1 = 1;
    define("IVA", 0.21);

    echo "<h3 style='margin-left: 110px'>Factura</h3>";
    echo "<p><b style='margin-left: 10px'>Unidades</b><b style='margin-left: 100px'>Producto - Precio</b></p>";
    echo "<p style='margin-left: 39px'><i>$und1</i>   <i style='margin-left: 135px'>$prod1 - $precio1 </i></p>";
    echo "</br>";
    echo "</br>";
    echo "</br>";
    echo "<p><b style='margin-left: 10px'>Importe Base:</b> <i style='margin-left: 135px'>$precio1</i>";
    echo "<p><b style='margin-left: 10px;margin-right: 145px'>Importe IVA:</b>";
    echo $precio1 * IVA;
    echo "<p><b style='margin-left: 10px;margin-right: 135px'>Importe Total:</b>";
    echo $precio1 * IVA + $precio1;
    ?>
</body>
</html>