<?php 
    require '../models/conexion-sql.php';

    $id = $mysqli->real_escape_string($_POST['id2']);
    $cedula = $mysqli->real_escape_string($_POST['cedula']);

    $sql = "SELECT cedula FROM reporte WHERE id='$id' ";
    $resultado = $mysqli->query($sql);
    $fila = $resultado->fetch_assoc();
    $hora_salida = date('h:i:s');

    if($cedula == $fila['cedula']){
        $sql2 = "UPDATE reporte SET hora_salida='$hora_salida' WHERE id='$id' ";
        $resultado2 = $mysqli->query($sql2);

        echo $sql2;
        if($resultado2 > 0){
            header('Location: ../views/informe_reporte.php');
        }else{
            'algo dsaliio mal';
        }
    }else{
        'no coincide';
    }
?>