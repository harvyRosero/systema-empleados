<?php 
    require '../models/conexion-sql.php';

    $nombres = $mysqli->real_escape_string($_POST['nombres']);
    $apellidos = $mysqli->real_escape_string($_POST['apellidos']);
    $telefono = $mysqli->real_escape_string($_POST['telefono']);
    $cedula = $mysqli->real_escape_string($_POST['cedula']);
    $fecha_registro = date('y-m-d');
    $estado = 'Activo';

    $consulta = "SELECT id FROM empleados WHERE cedula='$cedula' ";
    $resultado1 = $mysqli->query($consulta);
    $fila = $resultado1->fetch_assoc();
    
    if($fila == 0){
        $sql = "INSERT INTO empleados (nombres, apellidos, telefono, cedula, fecha_registro, estado) VALUES 
        ('$nombres', '$apellidos', '$telefono', '$cedula', '$fecha_registro', '$estado')";
        $resultado = $mysqli->query($sql);

        if($resultado > 0){
            header('Location: ../index.php');
        }else{
            echo 'kajsnflkfasndf';
        }
    }else{
        echo 'este usuario ya esta registrado';
    }
    

    
?>