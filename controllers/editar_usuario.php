<?php 
    require '../models/conexion-sql.php';

    $id = $mysqli->real_escape_string($_POST['id']);
    $nombres = $mysqli->real_escape_string($_POST['nombres']);
    $apellidos = $mysqli->real_escape_string($_POST['apellidos']);
    $telefono = $mysqli->real_escape_string($_POST['telefono']);
    $cedula = $mysqli->real_escape_string($_POST['cedula']);
    $estado = $mysqli->real_escape_string($_POST['estado']);
    
    $sql = "UPDATE empleados SET nombres='$nombres', apellidos='$apellidos', telefono='$telefono', 
    cedula='$cedula', estado='$estado' WHERE id='$id' ";

    $resultado = $mysqli->query($sql);

    if($resultado > 0){
        header('Location: ../index.php');
    }else{
        echo 'ocurrio un error inesperado';
    }
?>