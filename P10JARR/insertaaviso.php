<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserta Avisos</title>
</head>
<body>
    <h1>AVISO NUEVO</h1>
    <br>
    <br>
    <!-- Creamos un formulario en el cual escribimos los datos del los avisos  -->
    <form action="" name="insertaavisos" method="post">
        <label for="cliente">Cliente: </label>
        <input type="text" name="cliente" maxlength="100" required>
        <br/>
        <label for="observaciones">Observaciones: </label>
        <textarea name="observaciones"  id="" cols="40" rows="20"></textarea>
        <br/>
        <!-- Le agregamos un boton al formulario que nos permita enviar los datos una vez pulsado -->
        <input type="submit" value="Insertar Aviso" name="boton">
    </form>
</body>
<!-- Utilizamos codigo php para que este compruebe si el boton fue pulsado y de ser así, enviará los datos introducidos en el formulario a la base de datos  -->
<?php
    if (isset($_POST['boton'])){
        // Para introducir los datos en nuestra base de datos primero debemos conectar con la misma, esto lo hacemos incluyendo el fichero PHP con los datos de conexión
        include("conexionBBDD.php");
        // Obtenemos el nombre del cliente desde el formulario
        $cliente = $_POST['cliente'];
        // Obtenemos las observaciones del formulario
        $observaciones = $_POST['observaciones'];
        // Creamos una variable llamada sentencia, la cual inserte los valores del nombre y de las observaciones en los campos correspondientes de nuestra tabla
        $sentencia = "insert into tbavisos (cliente, observaciones) values ('$cliente', '$observaciones');";
        // Creamos la variable consultar la cual se conecte conecte con la base de datos y ejecute la sentencia
        $consultar = mysqli_query($conexionBBDD, $sentencia);
        // Seguido de esto incluimos el fichero con los datos de desconexion
        include("desconexionBBDD.php");
        // Por ultimo añadimos un header que nos redirija automaticamente a la pagina de consulta
        header('Location: consultaavisos.php');
    }
    ?>
</html>