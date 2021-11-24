<?php
$op = $_POST['fopcion'];
$num1 = $_POST['fprimero'];
$num2 = $_POST['fsegundo'];

    if ($op == 0) {
        echo "El resultado de la multiplicacion es: ". $num1 * $num2;
    }
    elseif ($op == 1) {
        echo "El resultado de la Division es: ". $num1 / $num2;
    }
    elseif ($op == 2) {
        echo "El resultado de la Suma es: ". $num1 + $num2;
    }
    elseif ($op == 3) {
        echo "El resultado de la Resta es: ". $num1 - $num2;
    }
?>