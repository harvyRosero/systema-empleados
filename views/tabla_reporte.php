<?php 
    require '../models/conexion-sql.php';

    $id = $mysqli->real_escape_string($_GET['id']);
    $sql = "SELECT nombres, apellidos, telefono, cedula, estado FROM empleados WHERE id ='$id' ";
    $resultado = $mysqli->query($sql);
    // ---------------------- 
    $resultado2 = $mysqli->query($sql);
    $fila2 = $resultado2->fetch_assoc();
    $cedula = $fila2['cedula'];

    $sql2 = "SELECT id, nombres, apellidos, telefono, hora_entrada, hora_salida   FROM reporte 
    WHERE cedula='$cedula' ";
    $resultado3 = $mysqli->query($sql2);
    // ----------------------- 
    $resultado4 = $mysqli->query($sql2);


    

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
        <h2 class="text-center">Reportarse</h2>

        <h4 class="mt-3">Marcar Hora Entrada</h4>
        <table class="display mt-3 table table-bordered border-success" style="width:100%">
            <thead>
                <tr>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Telefono</th>
                    <th>Fecha</th>
                    <th>Marcar Hora entrada</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php while($fila = $resultado->fetch_assoc()) {?>
                <tr>
                    <td style="color: blue;" > <?php echo $fila['nombres'] ?> </td>
                    <td style="color: blue;"> <?php echo $fila['apellidos'] ?> </td>
                    <td style="color: blue;"> <?php echo $fila['telefono'] ?> </td>
                    <td style="color: blue;"> <?php echo date('y-m-d'); ?> </td>
                    <td>
                        <form id="v_cedula" name="v_cedula" method="POST" 
                        action="../controllers/enviar_reporte_entrada.php">

                            <input type="text" id='cedula' name='cedula' placeholder="ingrese Cedula">

                            <input type="hidden" id='id' name='id' value="<?php echo $id ?>">

                            <button type="submit" class="btn btn-primary" id="enviar_reporte_entrada" >
                                        Enviar
                                        </button>
                            
                        </form>
                    </td>
                    
                </tr>
                    
                <?php } ?>
            </tbody>
        </table>

        <!-- TABLA DE REPORTE  -->

        <h4 class="mt-5 mb-3">Marcar Hora Salida</h4>

        <table id="example" class="display mt-3 table table-bordered border-success" style="width:100%">
            <thead>
                <tr>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Telefono</th>
                    <th>Fecha</th>
                    <th>Hora entrada</th>
                    <th>Marcar Hora salida</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php while($fila3 = $resultado3->fetch_assoc()) {?>
                <tr>
                    <td style="color: blue;" > <?php echo $fila3['nombres'] ?> </td>
                    <td style="color: blue;"> <?php echo $fila3['apellidos'] ?> </td>
                    <td style="color: blue;"> <?php echo $fila3['telefono'] ?> </td>
                    <td style="color: blue;"> <?php echo date('y-m-d'); ?> </td>
                    <td style="color: blue;"> <?php echo $fila3['hora_entrada']; ?> </td>                        
                    <td style="color: blue;" > 
                        <?php if($fila3['hora_salida'] != '00:00:00' ){
                            echo $fila3['hora_salida']; 
                        } else { ?>

                            <form id="v_cedula" name="v_cedula" method="POST" 
                            action="../controllers/enviar_reporte_salida.php">
                                <input type="text" id='cedula' name='cedula' placeholder="ingrese Cedula">
                                <input type="hidden" id='id2' name='id2' value="<?php echo $fila3['id']; ?>">

                                <button type="submit" class="btn btn-danger" id="enviar_reporte_salida" >
                                    Enviar
                                </button> 
                            </form>
                        <?php } ?>
                    </td>
                    
                </tr>
                    
                <?php } ?>
            </tbody>

            
        </table>
        <a class="mb-4 w-50 btn btn-light border-success" href="../index.php">Volver</a>
    </div>

    
</body>
</html>