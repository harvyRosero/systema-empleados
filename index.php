<?php 
    require 'models/conexion-sql.php';
    $sql = "SELECT id, nombres, apellidos, telefono, fecha_registro, estado FROM empleados";
    $resultado = $mysqli->query($sql);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/jquery.dataTables.min.css">

    <script src="js/jquery-3.6.0.min.js" ></script>
    <script src="js/bootstrap.min.js" ></script>
    <script src="js/jquery.dataTables.min.js" ></script>

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

    
        <table id="example" class="display mt-3 table table-bordered border-success" style="width:100%">
            <thead>
                <tr>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Telefono</th>
                    <th>Fecha Registro</th>
                    <th>Estado</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php while($fila = $resultado->fetch_assoc()) { 
                    if($fila['estado'] == 'Activo' ){  ?>
                <tr>
                    <td style="color: blue;" > <?php echo $fila['nombres'] ?> </td>
                    <td style="color: blue;"> <?php echo $fila['apellidos'] ?> </td>
                    <td style="color: blue;"> <?php echo $fila['telefono'] ?> </td>
                    <td style="color: blue;"> <?php echo $fila['fecha_registro'] ?> </td>
                    <td style="color: blue;"> <?php echo $fila['estado'] ?></td>
        
                    <td>  <a class="btn btn-info" href="views/formulario_editar.php?id=
                    <?php echo $fila['id'] ?>"> Editar</a> </td>

                    <td>  <a class="btn btn-primary" href="views/tabla_reporte.php?id=
                    <?php echo $fila['id']; ?>"> Reportarse</a> </td>

                    <td>  <a class="btn btn-secondary">Eliminar</a> </td>
                </tr>
                <?php }else {?>
                    <tr>
                        <td style="color: red;"> <?php echo $fila['nombres'] ?> </td>
                        <td style="color: red;"> <?php echo $fila['apellidos'] ?> </td>
                        <td style="color: red;"> <?php echo $fila['telefono'] ?> </td>
                        <td style="color: red;"> <?php echo $fila['fecha_registro'] ?> </td>
                        <td style="color: red;"> <?php echo $fila['estado'] ?></td>
                        
                        <td>  <a class="btn btn-info" href="views/formulario_editar.php?id=<?php 
                        echo $fila['id'];  ?>"> Editar</a> </td>

                        <td> <a class="btn btn-secondary">Reportarse</a> </td>

                        <td><a href="controllers/eliminar_usuario.php?id=<?php echo $fila['id'] ?>" 
                        class="btn btn-danger">Eliminar</a></td>
                    </tr>
                <?php } }?>
            </tbody>
        </table>

            <div class="row mt-3">
                <div class="col">
                    <a href="views/formulario-registro.php" 
                    class="btn btn-success w-100">Registrarse</a> 
                </div>
                <div class="col">
                    <a href="views/informe_reporte.php" class="btn btn-light border-success w-100">Ver Informe de registro</a>
                </div>
        </div>
    </div>

    
</body>
</html>