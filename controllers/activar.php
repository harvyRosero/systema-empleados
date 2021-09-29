<?php 
    require '../models/conexion.php';

    $id = $mysqli->real_escape_string($_GET['id']);

    $sql = "UPDATE  empleados SET estado=1 WHERE id=$id";

    $resultado = $mysqli->query($sql);

    if($resultado > 0){
        echo 'USUARIO SE ACTUALIZO A INACTIVO';
        echo "<br/> <a href='../index.php' class='btn btn-success mt-1 mb-3'>Ver cambios</a>";
    }else{
        echo 'ERROR AL INACTIVAR EMPLEADO';
        echo "<br/> <a href='../index.php' class='btn btn-success mt-1 mb-3'>olver</a>";
    }
?>