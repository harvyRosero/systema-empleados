<?php 
    require '../models/conexion.php';
    $sql = "SELECT id, nombre, apellido, ingreso FROM empleados WHERE estado=0";
    $result = $mysqli->query($sql);

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
        <h1>Empleados Inactivos</h1>
    </div>

    <div class="boton" >
        <a href="nuevo.php" class="btn btn-success mt-1 mb-3" center>Registrarse</a>
    </div>
    

    <table id="tabla" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Fecha de Incorporacion</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        <?php while($fila = $result->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $fila['nombre']; ?> </td>
                <td><?php echo $fila['apellido']; ?> </td>
                <td><?php echo $fila['ingreso']; ?> </td>
                <td><a href="../controllers/activar.php?id=<?php echo $fila['id']; ?>" class="btn btn-warning">Activar</a> </td>
        }

            </tr>
        <?php } ?>
        </tbody>
        


    </table>
    
    <div class="boton" >
        <a class="btn btn-dark w-100 mt-3" href="../index.php"> Empleados Activos</a>
    </div>

    </div>

    
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    </body>
</html>