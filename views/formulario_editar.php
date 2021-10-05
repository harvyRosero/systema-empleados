<?php 
    require '../models/conexion-sql.php';

    $id = $mysqli->real_escape_string($_GET['id']);

    $sql = "SELECT id, nombres, apellidos, cedula, telefono, fecha_registro, estado FROM empleados WHERE id='$id' ";
    $resultado = $mysqli->query($sql);
    $fila = $resultado->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet"  href="../css/bootstrap.min.css">

    <title>Document</title>
</head>
<body>
        <div class="container">

        <h2 class="text-center mt-5">Editar empleado</h2>

        <form class="mt-5" id="registrarse" name="registro" method="POST" 
        action="../controllers/editar_usuario.php">
            <div class="row">
                <div class="col">
                <input  type="text" class="form-control" placeholder="Nombres" name="nombres" id="nombres"
                value="<?php echo $fila['nombres'] ?>"  autofocus required >

                <input  type="hidden" class="form-control" name="id" id="id"
                value="<?php echo $fila['id'] ?>">
                </div>
                <div class="col">
                <input value="<?php echo $fila['apellidos'] ?>" type="text" class="form-control" placeholder="Apellidos" name="apellidos" 
                id="apellidos" required>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                <input value="<?php echo $fila['telefono'] ?>" type="number" class="form-control" placeholder="Telefono" name="telefono" 
                id="telefono" required minlength="10" >
                </div>
                <div class="col">
                <input type="number" class="form-control" placeholder="Cedula" 
                value="<?php echo $fila['cedula'] ?>" 
                name="cedula" id="cedula" required>
                </div>
            </div>

                <div class=" form-group mt-3">
                    <label for="estado"> Estado </label>
                    <select class="form-control" id="estado" name="estado">
                        <option value="Activo">Activo</option>
                        <option value="inactivo">Inactivo</option>
                    </select>
                </div>
            <button type="submit" class="form-control  btn btn-warning mt-3 w-100" id="editar_ususario" >
                Guardar
            </button>

            
        </form>
            <a class="btn btn-light border-warning w-100 mt-2" href="../index.php">Cancelar</a>
        </div>

        <script src="../js/bootstrap.min.js"></script>
    </body>
</html>