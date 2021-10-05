<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet"  href="../css/bootstrap.min.css">

    <title>Document</title>
</head>
<body>
        <div class="container">

        <h2 class="text-center mt-5">Formulario de registro</h2>

        <form class="mt-5" id="registrarse" name="registro" method="POST" action="../controllers/guardar_usuario.php">
            <div class="row">
                <div class="col">
                <input  type="text" class="form-control" placeholder="Nombres" name="nombres" id="nombres"
                autofocus required >
                </div>
                <div class="col">
                <input type="text" class="form-control" placeholder="Apellidos" name="apellidos" 
                id="apellidos" required>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                <input  type="number" class="form-control" placeholder="Telefono" name="telefono" 
                id="telefono" required minlength="10" >
                </div>
                <div class="col">
                <input type="number" class="form-control" placeholder="Cedula"
                name="cedula" id="cedula" required>
                </div>
            </div>
            <button type="submit" class="form-control  btn btn-primary mt-3 w-100" id="guardar_ususario" >
                Enviar
            </button>

            
        </form>
            <a class="btn btn-light border-primary w-100 mt-3" href="../index.php">Cnacelar</a>
        </div>

        <script src="../js/bootstrap.min.js"></script>
    </body>
</html>