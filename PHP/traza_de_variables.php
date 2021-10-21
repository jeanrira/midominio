<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traza de Variables</title>
</head>
<body>
<?php
$a = 3;
$b = 6;
$a = $a+1;
$a = ($b/2)+6;
$b = $a+$b;// ¿Cuánto vale $a y $b? Compruébalo con echo

echo "a=".$a;
echo "</br>b=".$b;
echo "</br>";
echo ++$a;    // Se le suma uno a a
echo "</br>";
echo --$b;  // Se le resta uno a b
?>
<!--
a   b
3   6
4  15
9
-->
</body>
</html>