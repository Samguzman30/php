<?php
ini_set ("display errors" ,1);
ini_set("display_startup_errors", 1);
error_reporting(E_ALL);

//si existe el archivo invitados lo abrimos y cargamos en una variable del tipo array los dni permitidos

//sino el array queda como un array vacio

if ($_POST){

if (isset($_POST["btnProcesar"])){
//si el dni ingresado se encuentra en la lista se mostrara un mensaje de bienvenido

//sino se mostrara un mensaje de "no se encuentra en la lista de invitados"
}

if (isset($_POST["btnVip"])){
    //si el codido es verde mostrara su codigo de acceso es: numero random

    //sino "usted no tiene pase vip"
}


}
?>




<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de invitados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    <main class="container">
        <div class="row">
            <div class="col-12 text-center my-4">
                <h1>Lista de invitados</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-12 text-start">
                <p>Complete el siguiente formulario:</p>
            </div>
        </div>

        <form action="" method="post">

        <div class="row">
            <div class="col-3">
            <p>Ingrese el dni</p>
            <label for="txtNumero">Numero</label><br>
        <input type="number" name="tntNumnber" class="form-control"> <br>
        <input type="submit" name="btnProcesar" class="btn-primary" value="Verificar invitado">
            </div>
        </div>

        

        <div class="row">
            <div class="col-3 mt-4">
            <p>Ingresa el cogido secreto para el pase vip </p>
            <input type="number" name="txtCodigo" class="form-control"> <br>
            <input type="submit" name="btnVip" class="btn-primary" value="Verificar codigo">

            </div>
        </div>
       

        </form>

    </main>
</body>
</html>