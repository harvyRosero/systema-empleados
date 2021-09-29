<?php 
    require '../models/conexion.php';
    $sql = "SELECT nombre, apellido, fecha_de_nacimiento, fecha_de_incorporacion, cedula, hora_ingreso, hora_salida, dia
    FROM reporte ";
    $result = $mysqli->query($sql);

    $dia = date('y-m-d');

?>

<!doctype html>
<html lang="es">
    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="../css/jquery.dataTables.min.css">

    <script src="../js/jquery-3.6.0.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.dataTables.min.js"></script>


    <title>app web php</title>

    <script>
        $(document).ready(function() {
        $('#tabla').DataTable();
        } );
    </script>



    </head>
    <body>
    

    <div class="container" >

    <div class="text-center" >
        <h1>Empleados Activos</h1>
    </div>
    

    <table id="tabla" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Fecha de incorporacion</th>
                <th>Dia</th>
                <th>Hora Ingreso</th>
                <th>Hora Salida</th>
            </tr>
        </thead>
        <tbody>
        <?php while($fila = $result->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $fila['nombre']; ?> </td>
                <td><?php echo $fila['apellido']; ?> </td>
                <td> <?php echo $fila['fecha_de_incorporacion']; ?> </td>
                <td> <?php echo $fila['dia']; ?> </td>
                <td> <?php echo $fila['hora_ingreso']; ?> </td>
                <td> <?php echo $fila['hora_salida']; ?> </td>
                
        }

            </tr>
        <?php } ?>
        </tbody>
        


    </table>
    
    <div class="boton" >
        <a class="btn btn-dark w-100 mt-3" href="../index.php"> Volver</a>
    </div>

    </div>

    
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    </body>
</html>