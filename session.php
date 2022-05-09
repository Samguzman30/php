<?php
ini_set ("display errors" ,1);
ini_set("display_startup_errors", 1);
error_reporting(E_ALL);

session_start(); //empezar la sesion
if (!isset ($_SESSION["ListadoDeClientes"])){ //si $_SESSION no esta creada despues del destroy, entonces equivale a un array
    $_SESSION["ListadoDeClientes"] = array(); 
}
if ($_POST){
    if (isset ($_POST["btnAgregar"])){

    
    $nombre = $_POST["txtNombre"];
    $dni = $_POST["txtDni"];
    $edad = $_POST["txtEdad"];
    $telefono = $_POST["txtTelefono"];

    $cliente = array("nombre" => $nombre,
                    "dni" => $dni,
                    "edad" => $edad,
                    "telefono" => $telefono);

    $_SESSION["ListadoDeClientes"][] = $cliente;
}
    else if (isset($_POST["btnEliminar"])){
session_destroy();
header("Location: session.php");
    }

}


//unset($_SESSION["ListadoDeClientes"][0] borrar arrays
//session_destroy() deja de tener la sesion abierta

?>
<!DOCTYPE html>
<html lang="es">  
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesion clientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
<main class="container">
    <div class="row">
        <div class="col-12 text-center my-5">
        <h1>Formulario de datos personales</h1>
    </div>
    <div class="row">
        <div class="col-5">
            <form action="" method="post">

            <div>
            <label for="txtNombre">Nombre:*</label>
            <input type="text" name="txtNombre" id="txtNombre" class="form-control" required>
            </div>

            <div>
            <label for="txtDni">DNI:*</label>
            <input type="text" name="txtDni" id="txtDni" class="form-control" required>
            </div>

            <div>
            <label for="txtEdad">Edad:*</label>
            <input type="number" name="txtEdad" id="txtEdad" class="form-control" required>
            </div>

            <div>
            <label for="txtTelefono">Telefono:*</label>
            <input type="tel" name="txtTelefono" id="txtTelefono" class="form-control" required>
            </div>

            <div class="my-3">
                <button type="submit" name="btnAgregar" class="btn bg-primary text-white">Enviar</button>
                <button type="submit" name="btnEliminar" class="btn bg-danger text-white">Eliminar</button>
            </div>
            </form>


        </div>
        <div class="col-7 text-center">
            <h2>Datos</h2>

            <table class="table table-hover border">
                <th>Nombre</th>
                <th>DNI</th>
                <th>Edad</th>
                <th>Telefono</th>


                <?php
              foreach ($_SESSION["ListadoDeClientes"] as $cliente):
              ?> 
              <tr>
              <td><?php echo $cliente["nombre"];?></td>
              <td><?php echo $cliente["dni"]; ?></td>
              <td><?php echo $cliente["edad"]; ?></td>
              <td><?php echo $cliente["telefono"]; ?></td>
              </tr>

               <?php endforeach; ?>
            </table>

        </div>
    </div>

</main>
    
</body>
</html>