<?php 
    require '../models/conexion-sql.php';

    $id = $mysqli->real_escape_string($_POST['id']);
    $cedula = $mysqli->real_escape_string($_POST['cedula']);
    $sql = "SELECT nombres, apellidos, cedula, telefono,  estado FROM empleados WHERE id ='$id' ";
    $resultado = $mysqli->query($sql);
    $fila = $resultado->fetch_assoc();

    $cedula2 = $fila['cedula'];
    $nombres = $fila['nombres'];
    $apellidos = $fila['apellidos'];
    $telefono = $fila['telefono'];
    $hora_entrada = date('h:i:s');
    $hora_salida = '00:00:00';
    $fecha= date('y-m-d');

    if($cedula == $cedula2){
        $sql = "INSERT INTO reporte (nombres, apellidos, telefono, cedula, hora_entrada, hora_salida, fecha) VALUES 
        ('$nombres', '$apellidos', '$telefono', '$cedula', '$hora_entrada', '$hora_salida', '$fecha')";
        $resultado = $mysqli->query($sql);

        if($resultado > 0){
            header('Location: ../index.php');
            echo 'correcro';
        }else{
            echo 'ocurrio un error inesperado';
        }
    }else{
        echo 'su cedula es incorrecta';
    }
?>