<?php
ini_set ("display errors" ,1);
ini_set("display_startup_errors", 1);
error_reporting(E_ALL);

if ($_POST){
    $dni = $_POST["txtDni"];
    $nombre = $_POST["txtNombre"];
    $telefono = $_POST["txtTelefono"];
    $correo = $_POST["txtCorreo"];

    $aClientes = array();
    $aClientes[] = array ("dni" => $dni,
                          "nombre" => $nombre,
                          "telefono" => $telefono,
                          "correo" => $correo
                        ); 
                           //convertir array en json para almacenar
                           $strJson = json_encode($aClientes); 
                           //almacenar en archivo.txt en json
                          file_put_contents("archivo.txt", $strJson);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>ABM Clientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    <main class="container">
    <div class="row">
        <div class="col-12 text-center my-5">
        <h1>Registro de clientes</h1>
    </div>
    <div class="row">
        <div class="col-5">
            <form action="" method="post">

            <div>
            <label for="txtDni">DNI:*</label>
            <input type="number" name="txtDni" id="txtDni" class="form-control" required>
            </div>

            <div>
            <label for="txtNombre">Nombre:*</label>
            <input type="text" name="txtNombre" id="txtNombre" class="form-control" required>
            </div>

            <div>
            <label for="txtTelefono">Telefono:*</label>
            <input type="number" name="txtTelefono" id="txtTelefono" class="form-control" required>
            </div>

            <div>
            <label for="txtCorreo">Correo:*</label>
            <input type="email" name="txtCorreo" id="txtCorreo" class="form-control" required>
            </div>
         <p class="my-3">Archivo adjunto: <input type="file" name="" id="" accept=".jpg, ,jpeg, .png"> <br>
         archivos admitivos: .jpg, .jpeg, .png</p>
            <div class="my-3">
                <button type="submit" name="btnGuardar" class="btn bg-primary text-white">Guardar</button>
                <button type="submit" name="btnNuevo" class="btn bg-danger text-white">NUEVO</button>

            </div>
            </form>


        </div>
        <div class="col-7 text-center">
            <table class="table table-hover border">
                <th>Imagen</th>
                <th>DNI</th>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Acciones</th>
                </div>


    </main>
</body>
</html>