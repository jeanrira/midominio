<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Avisos</title>
</head>
<body>
<?php
    if (isset($_POST['boton'])){
        // Conectamos con la base de datos
        include("conexionBBDD.php");
        // Obtenemos los datos del aviso desde el formulario
        $id = $_POST['id'];
        $cliente = $_POST['cliente'];
        $fechaaviso = $_POST['fechaaviso'];
        $fechaprevista = $_POST['fechaprevista'];
        $fechaatencion = $_POST['fechaatencion'];
        $observaciones = $_POST['observaciones'];
        $estado = $_POST['estado'];
        // Creamos una variable llamada sentencia, la cual inserte los valores en los campos correspondientes de nuestra tabla
        $sentencia = "update tbavisos set cliente='$cliente', fechaaviso='$fechaaviso', fechaprevista='$fechaprevista', fechaatencion='$fechaatencion', observaciones='$observaciones', estado=$estado where id=$id;";
        // Creamos la variable consultar la cual se conecte conecte con la base de datos y ejecute la sentencia
        $consultar = mysqli_query($conexionBBDD, $sentencia);
        // Seguido de esto incluimos el fichero con los datos de desconexion
        include("desconexionBBDD.php");
        // Por ultimo añadimos un header que nos redirija automaticamente a la pagina de consulta
        header('Location: consultaavisos.php');
    }

    if (!isset($_GET['id'])) {
        echo "<h1>El ID del aviso no es valido</h1><br><a href='consultaavisos.php'>Volver</a>";
    } else {
        // incluimos el fichero PHP con los datos de conexión a la base de datos
        include("conexionBBDD.php");
        // Ejecutamos una sentencia utilizando el identificador que nos han proporcionado
        $sentencia = "select * from tbavisos where id=$id;";
        // Creamos la variable consultar la cual se conecte con la base de datos y ejecute la sentencia
        $consultar = mysqli_query($conexionBBDD, $sentencia);
        if ($fila = mysqli_fetch_array($consultar)) {
            // Convertiremos los valores de la consulta en un array llamado fila
            $id = $fila['id'];
            $cliente = $fila['cliente'];
            $fechaaviso = $fila['fechaaviso'];
            $fechaprevista = $fila['fechaprevista'];
            $fechaatencion = $fila['fechaatencion'];
            $observaciones = $fila['observaciones'];
            $estado = $fila['estado'];
            $html = '<h1>MODIFICAR AVISO $id</h1><br/><br/>
            <form action="" name="modavisos" method="post">
            <label for="id">ID: </label>
            <input type="text" name="id" value="'.$id.'" readonly>
            <label for="cliente">Cliente: </label>
            <input type="text" name="cliente" value="'.$cliente.'" maxlength="100" required>
            <br/>
            <label for="fechaaviso">Fecha de Aviso: </label>
            <input type="text" name="fechaaviso" value="'.$fechaaviso.'" readonly>
            <br/>
            <label for="fechaprevista">Fecha Prevista: </label>
            <input type="text" name="fechaprevista" value="'.$fechaprevista.'">
            <br/>
            <label for="fechaatencion">Fecha Atencion: </label>
            <input type="text" name="fechaatencion" value="'.$fechaatencion.'">
            <br/>
            <label for="observaciones">Observaciones: </label>
            <textarea name="observaciones"  id="" cols="40" rows="20" value="'.$observaciones.'"></textarea>
            <br/>
            <label for="estado">Estado: </label>
            <input type="text" name="estado" value="'.$estado.'">
            <br/>
            <!-- Le agregamos un boton al formulario que nos permita enviar los datos una vez pulsado -->
            <input type="submit" value="Modificar Aviso" name="boton">
        </form>';
        echo $html;
           // Vaciamos el espacio de la consulta
        mysqli_free_result($consultar);
        }else {
             // Incluimos el fichero con los datos de desconexion
            include("desconexionBBDD.php");
            echo "<h1>El ID del aviso no es valido</h1><br><a href='consultaavisos.php'>Volver</a>";
        }
    };

    ?>
    </body>
</html>