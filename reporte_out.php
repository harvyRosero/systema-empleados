<?php 
    require 'conexion.php';

    $cedula = $mysqli->real_escape_string($_POST['cedula']);
    $nombre = $mysqli->real_escape_string($_POST['nombre']);
    $apellido = $mysqli->real_escape_string($_POST['apellido']);
    $fecha_de_nacimiento = $mysqli->real_escape_string($_POST['fecha_de_nacimiento']);
    $fecha_de_ingreso = $mysqli->real_escape_string($_POST['ingreso']);
    $hora_ingreso = '';
    $hora_salida = date('h:i:s');
    $dia =  date('y-m-d');

    $cedula2 = $_POST['cedula2'];

    $sql = "INSERT INTO  reporte (nombre, apellido, cedula, fecha_de_nacimiento, fecha_de_incorporacion, 
    hora_ingreso, hora_salida , dia) VALUES ('$nombre', '$apellido', '$cedula', '$fecha_de_nacimiento', 
    '$fecha_de_ingreso', '$hora_ingreso', '$hora_salida', '$dia' )";

    $resultado = $mysqli->query($sql);


    if($resultado > 0){

        if($cedula2 == $cedula){
            echo 'SE HA REPORTADO CON EXITO';
            echo "<br/> <a href='index.php' class='btn btn-success mt-1 mb-3'>Ver cambios</a>";
        }else{
            echo 'ERROR AL VALIDAR DATOS';
            echo "<br/> <a href='index.php' class='btn btn-success mt-1 mb-3'>Volver</a>";
        }
        
    }else{
        echo 'ERROR AL REPORTARSE';
        echo "<br/> <a href='index.php' class='btn btn-success mt-1 mb-3'>Volver</a>";
    }
?>

