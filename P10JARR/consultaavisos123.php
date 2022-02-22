<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de Avisos Atendidos y no Terminados</title>
</head>
<body>
<?php
    echo "<h1>Consulta de Avisos Atendidos y no Terminados</h1>";
    // Insertamos el fichero PHP con los datos de conexion
    include("conexionBBDD.php");
    // Creamos una variable llamada sentencia, la cual obtenga todos los valores de los campos de nuestra tabla y que lo ordene por el campo de fechaaviso
    $sentencia = "select * from tbavisos where estado in (1, 2, 3) order by fechaaviso;";
    // Creamos la variable consultar la cual se conecte conecte con la base de datos y ejecute la sentencia
    $consultar = mysqli_query($conexionBBDD, $sentencia);
    // Creamos un boton para crear un nuevo aviso que nos redirija a la pagina insertaaviso.php y un contador de avisos
    echo "Numero de avisos: " . mysqli_num_rows($consultar). "<a href='insertaaviso.php'>Crear nuevo aviso</a><br/>";
    // Para mostrar los datos obtenidos en la sentencia anterior primero debemos crear un bucle while el cual recorra todos los campos de la consulta anterior y los ponga en un array con variables que podamos consultar
        while ($filas = mysqli_fetch_array($consultar)){
            $id = $filas['id'];
            $cliente = $filas['cliente'];
            $fechaaviso = $filas['fechaaviso'];
            $fechaprevista = $filas['fechaprevista'];
            $fechaatencion = $filas['fechaatencion'];
            $observaciones = $filas['observaciones'];
        // Utilizamos un if para definir el estado de cada aviso segun su codigo de estado
        if ($filas['estado'] == 0) {
            $estado = "No antendido";
        }
        elseif ($filas['estado'] == 1 || $filas['estado'] == 2 || $filas['estado'] == 3) {
                $estado = "Por terminar";
            }
        else {
                $estado = "Pendiente de cobro";
            }

            // Por ultimo mostramos por pantalla una tabla con todos los valores
    echo "<table border=1>
            <tr>
            <th>ID</th>
            <th>CLIENTE</th>
            <th>FECHA DE AVISO</th>
            <th>FECHA PREVISTA</th>
            <th>FECHA DE ATENCION</th>
            <th>OBSERVACIONES</th>
            <th>ESTADO</th>
            <th>EDITAR</th>
            </tr>
            <tr>
            <td>$id</td>
            <td>$cliente</td>
            <td>$fechaaviso</td>
            <td>$fechaprevista</td>
            <td>$fechaatencion</td>
            <td>$observaciones</td>
            <td>$estado</td>
            <td><a href='modificaravisos.php?id=$id'>Modificar</a>  <a href='atenderavisos.php?id=$id'>Atender</a>    <a href='borraravisos.php?id=$id'>Borrar</a></td>
            </tr>
        </table>";
    };

    // Añadimos filtros de busqueda al final de la paginalos cuales redirigiran a sus respectivas paginas
    echo "<br/><h3><a href='consultaavisos0.php'>Mostrar solo no atendidos</a>  <a href='consultaavisos.php'>Mostrar todo el listado</a>    <a href='consultaavisos4.php'>Mostar pendientes de cobro</a></h3>";

    // Vaciamos el espacio de la consulta
    mysqli_free_result($consultar);

    // Incluimos el fichero con los datos de desconexion
    include("desconexionBBDD.php");
?>
</body>
</html>