<?php 
    require '../models/conexion-sql.php';

    $id = $mysqli->real_escape_string($_GET['id']);

    $sql = "DELETE FROM empleados WHERE id='$id' ";
    $resultado = $mysqli->query($sql);

    if($resultado > 0){
        header('Location: ../index.php');
    }else{
        echo 'ocurrio un error inesperado';
    }

    echo $id;
?>