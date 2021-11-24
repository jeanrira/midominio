<?php
$name = $_POST['name'];
$direc = $_POST['direc'];
$importe = $_POST['prec'];
$dist = $_POST['dist'];
$envio = 0;

    if ($importe < 50 && $dist < 10 ) {
    $envio = $envio + 5;
    }
    if ($importe < 50 && $dist >= 10 && $dist <= 20) {
        $envio = $envio + 10;
    }
    if ($importe < 50 && $dist > 20) {
        $envio = $envio + 15;
    }

echo "<h2>Factura</h2><br/>";
echo "<b>Nombre: <b/>$name<br/>";
echo "<b>Direccion: <b/>$direc<br/>";
echo "<b>Importe sin envio: <b/>$importe €<br/>";
echo "<b>Envio: <b/>$envio €<br/>";
echo "<b>Importe total: <b/>".$importe + $envio."€<br/>";
?>