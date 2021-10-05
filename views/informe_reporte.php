<?php 
    require '../models/conexion-sql.php';
    $sql = "SELECT id, nombres, apellidos, telefono, fecha, hora_entrada, hora_salida  FROM reporte";
    $resultado = $mysqli->query($sql);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="../css/jquery.dataTables.min.css">

    <script src="../js/jquery-3.6.0.min.js" ></script>
    <script src="../js/bootstrap.min.js" ></script>
    <script src="../js/jquery.dataTables.min.js" ></script>

    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>

    <title>Prueba t</title>
</head>
<body>

    <div class="container mt-4">
        <h2 class="text-center">Tabla de empleados</h2>

    
        <table id="example" class="display mt-3 table table-bordered border-dark" style="width:100%">
            <thead>
                <tr>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>telefono</th>
                    <th>fecha</th>
                    <th>Hora Entrada</th>
                    <th>Hora Salida</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php while($fila = $resultado->fetch_assoc()) { 
                    ?>
                <tr>
                    <td  > <?php echo $fila['nombres'] ?> </td>
                    <td > <?php echo $fila['apellidos'] ?> </td>
                    <td > <?php echo $fila['telefono'] ?> </td>
                    <td > <?php echo $fila['fecha'] ?> </td>
                    <td > <?php echo $fila['hora_entrada'] ?> </td>
                    <td > <?php echo $fila['hora_salida'] ?> </td>
        
                </tr>
                <?php } ?>
            </tbody>
        </table>

                <div class="mt-3 mb-3">
                    <a href="../index.php" class="btn btn-light border-success w-100">Volver</a>
                </div>
                </div>
            
    </div>

    
</body>
</html>