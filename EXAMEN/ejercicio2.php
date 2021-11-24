<?php
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    if ($user == "ALUMNO" && $pass == "Campus123") {
        echo "<h1>PUEDES PASAR</h1>";
    }
    else {
        echo "<h1>NO PUEDES PASAR</h1>";
    }
?>