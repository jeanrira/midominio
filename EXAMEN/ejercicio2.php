<?php
// Recogemos las credenciales enviadas desde el formulario y las guardamos en variables
    $user = $_POST['user'];
    $pass = $_POST['pass'];
// Utilizamos un if para mostrar el mensaje por pantalla si las credenciles coinciden
// con las almacenadas en el codigo y en caso contrario mostrar otro mensaje
    if ($user == "ALUMNO" && $pass == "Campus123") {
        echo "<h1>PUEDES PASAR</h1>";
    }
    else {
        echo "<h1>NO PUEDES PASAR</h1>";
    }
?>