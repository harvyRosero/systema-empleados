<?php
    require '../models/conexion.php';

    $id = $mysqli->real_escape_string($_GET['id']);
    $sql = "SELECT nombre, apellido, cedula, fecha_de_nacimiento FROM empleados WHERE id=$id LIMIT 1";
    $resultado = $mysqli->query($sql);

    $fila = $resultado->fetch_assoc();

?>


<!doctype html>
<html lang="es">
    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <title>app web php</title>
    </head>
    <body>
    

    <div class="container" >

    <div class="text-center" >
        <h1>Empleados</h1>
    </div>
    <div class="formulario" >

    <form id="registro" name="registro" METHOD="POST" ACTION="../controllers/actualizar.php"
    autocomplete="off"
    >


    <div class="form-group">
        <label for="nombre">Nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre"
        placeholder="Ingrese su nombre" autofocus required value="<?php echo $fila['nombre'] ?>" >

        <input type="hidden" id="id" name="id" value="<?php echo $id; ?>" />
    </div>

    <div class="form-group">
        <label for="apellido">Apellido</label>
        <input type="text" class="form-control" id="apellido" name="apellido"
        placeholder="Ingrese su apellido" value="<?php echo $fila['apellido'] ?>"
        >
    </div>

    <div class="form-group">
        <label for="cedula">Cedula</label>
        <input type="text" class="form-control" id="cedula" name="cedula"
        placeholder="C.C" >
    </div>

    <div class="form-group">
        <label for="fecha_de_nacimiento">Fecha de Nacimineto</label>
        <input type="date" class="form-control" id="fecha_de_nacimiento" name="fecha_de_nacimiento"
        placeholder="Ingrese su fecha de nacimineto" value="<?php echo $fila['fecha_de_nacimiento'] ?>" >
    </div>

    <div class="form-group" >
        <button class="form-control btn-primary" id="guarda" name="guarda" type="submit"> Guardar </button>
    </div>

    
    
    </form>
    
    <div class="boton" >
        <a class="btn btn-dark w-100" href="../index.php"> Cancelar</a>
    </div>

    </div>
    

    </div>

    <script src="../js/jquery-3.6.0.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    </body>
</html>