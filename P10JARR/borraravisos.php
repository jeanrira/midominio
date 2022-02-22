<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borrar Avisos</title>
</head>
<body>
    <h1>Borrar Aviso</h1>
    <?php
     if (!isset($_GET['$id'])) {
        echo "<h1>El ID del aviso no es valido</h1><br><a href='consultaavisos.php'>Volver</a>";
    } else {
        // incluimos el fichero PHP con los datos de conexión a la base de datos
        include("conexionBBDD.php");
        // Ejecutamos una sentencia utilizando el identificador que nos han proporcionado
        $sentencia = "delete from tbavisos where id=$id;";
        // Creamos la variable consultar la cual se conecte con la base de datos y ejecute la sentencia
        $consultar = mysqli_query($conexionBBDD, $sentencia);
        // Seguido de esto incluimos el fichero con los datos de desconexion
        include("desconexionBBDD.php");
        // Por ultimo añadimos un header que nos redirija automaticamente a la pagina de consulta
        header('Location: consultaavisos.php');
    }
    ?>
</body>
</html>