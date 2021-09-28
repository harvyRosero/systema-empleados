<!doctype html>
<html lang="es">
    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>app web php</title>
    </head>
    <body>
    

    <div class="container">

    <div class="text-center" >
        <h1>Registro de Empleados</h1>
    </div>

    <div class="formulario" >

    <form id="registro" name="registro" METHOD="POST" ACTION="guarda.php"
    autocomplete="off"
    >


    <div class="form-group">
        <label for="nombre">Nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre"
        placeholder="Ingrese su nombre" autofocus required >
    </div>

    <div class="form-group">
        <label for="apellido">Apellido</label>
        <input type="text" class="form-control" id="apellido" name="apellido"
        placeholder="Ingrese su apellido" autofocus required
        >
    </div>

    <div class="form-group">
        <label for="cedula">Cedula</label>
        <input type="text" class="form-control" id="cedula" name="cedula"
        placeholder="C.C" autofocus required >
    </div>

    <div class="form-group">
        <label for="fecha_de_nacimiento">Fecha de Nacimineto</label>
        <input type="date" class="form-control" id="fecha_de_nacimiento" name="fecha_de_nacimiento"
        placeholder="Ingrese
        su fecha de nacimineto" autofocus required >
    </div>

    <div class="form-group" >
        <button class="form-control btn-primary" id="guarda" name="guarda" type="submit"> Guardar </button>
    </div>
    
    </form>

    <div class="boton" >
        <a class="btn btn-dark w-100 mt-3" href="index.php"> Cancelar</a>
    </div>

    </div>
    

    </div>

    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    </body>
</html>