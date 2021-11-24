<?php
// Recogemos las credenciales enviadas desde el formulario y las guardamos en variables
// Creamos una variable nueva llamada envio
$name = $_POST['name'];
$direc = $_POST['direc'];
$importe = $_POST['prec'];
$dist = $_POST['dist'];
$envio = 0;

// Utilizamos varios if para sumarle a envio el importe indicado
// Si el importe es menor que 50 y la distancia menor que 10 se le suma 5 al envio
    if ($importe < 50 && $dist < 10 ) {
    $envio = $envio + 5;
    }
    // Si el importe es menor que 50 y la distancia esta entre 10 y 20 se le suma 10 al envio
    if ($importe < 50 && $dist >= 10 && $dist <= 20) {
        $envio = $envio + 10;
    }
// Si el importe es menor que 50 y la distancia mayor que 20 se le suma 15 al envio
    if ($importe < 50 && $dist > 20) {
        $envio = $envio + 15;
    }

// Por ultimo se imprimen los valores por pantalla y se suma el envio al importe para sacar el importe final
echo "<h2>Factura</h2><br/>";
echo "<b>Nombre: <b/>$name<br/>";
echo "<b>Direccion: <b/>$direc<br/>";
echo "<b>Importe sin envio: <b/>$importe €<br/>";
echo "<b>Envio: <b/>$envio €<br/>";
echo "<b>Importe total: <b/>".$importe + $envio."€<br/>";
?>