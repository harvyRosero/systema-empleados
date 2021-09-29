<?php 
    require '../models/conexion.php';

    $nombre = $mysqli->real_escape_string($_POST['nombre']);
    $apellido = $mysqli->real_escape_string($_POST['apellido']);
    $cedula = $mysqli->real_escape_string($_POST['cedula']);
    $fecha_de_nacimiento = $mysqli->real_escape_string($_POST['fecha_de_nacimiento']);
    $fecha_de_ingreso = date('Y-m-d');

    $sql = "INSERT INTO empleados (nombre, apellido, cedula, fecha_de_nacimiento, estado, ingreso)
    VALUES ('$nombre', '$apellido', '$cedula', '$fecha_de_nacimiento', 1, '$fecha_de_ingreso' )";

    $resultado = $mysqli->query($sql);

    if($resultado > 0){
        echo 'SE HA GUARDADO CON EXITO';
        echo "<br/> <a href='../index.php' class='btn btn-success mt-1 mb-3'>Ver cambios</a>";
    }else{
        echo 'ERROR AL AGREGAR';
        echo "<br/> <a href='../index.php' class='btn btn-success mt-1 mb-3'>Volver</a>";
    }
?>
