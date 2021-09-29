<?php 
    require '../models/conexion.php';

    $id = $mysqli->real_escape_string($_POST['id']);
    $nombre = $mysqli->real_escape_string($_POST['nombre']);
    $apellido = $mysqli->real_escape_string($_POST['apellido']);
    $cedula = $mysqli->real_escape_string($_POST['cedula']);
    $fecha_de_nacimiento = $mysqli->real_escape_string($_POST['fecha_de_nacimiento']);

    $sql = "UPDATE empleados SET nombre='$nombre', apellido='$apellido', cedula='$cedula', 
    fecha_de_nacimiento='$fecha_de_nacimiento' WHERE id='$id'  ";

    $resultado = $mysqli->query($sql);

    if($resultado > 0){
        echo 'SE HA ACTUALIZO CON EXITO';
        echo "<br/> <a href='../index.php' class='btn btn-success mt-1 mb-3'>Ver cambios</a>";
    }else{
        echo 'ERROR AL ACTUALIZAR';
        echo "<br/> <a href='../index.php' class='btn btn-success mt-1 mb-3'>Volver</a>";
    }
?>
