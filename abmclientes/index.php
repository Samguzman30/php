<?php
ini_set ("display errors" ,1);
ini_set("display_startup_errors", 1);
error_reporting(E_ALL);

if (file_exists("archivo.txt")){
    //si el archivo existe se cargan los clientes
    $strJson = file_get_contents("archivo.txt");
    $aClientes = json_decode($strJson, true);
    
} else{
    //si el archivo no existe es porque el array esta vacio, no hay datos para llenar
    $aClientes = array();
}
if (isset ($_GET["id"])){
$id = $_GET["id"];
} else{
$id = "";
}

if (isset($_GET["do"]) && $_GET["do"] == "eliminar"){
 unset($aClientes[$id]);
//convertir array en json
$strJson = json_encode($aClientes);
//almacenar en el json
file_put_contents("archivo.txt", $strJson);

header("location: index.php"); //para cargar el archivo nuevamente 
}

if ($_POST){
    $dni = $_POST["txtDni"];
    $nombre = $_POST["txtNombre"];
    $telefono = $_POST["txtTelefono"];
    $correo = $_POST["txtCorreo"];
    $nombreImagen = "";

    if ($_FILES["archivo"]["error"] === UPLOAD_ERR_OK) {
        $nombreAleatorio = date("ymdhmsi") . rand(1000, 2000); //202205101849371010
        $archivo_tmp = $_FILES["archivo"]["tmp_name"];
        $extension = pathinfo($_FILES["archivo"]["name"], PATHINFO_EXTENSION);
        if ($extension == "jpg" || $extension == "png" || $extension == "jpeg"){
            $nombreImagen = "$nombreAleatorio.$extension"; 
        move_uploaded_file($archivo_tmp, "imagenes/$nombreImagen"); //guarda el archivo fisicamente 
        //files/202215241.pdf
    }
}
if ($id >= 0){

    if ($_FILES["archivo"]["error"] !== UPLOAD_ERR_OK) {
        $nombreImagen = $aClientes[$id]["imagen"];

} else{
    //si viene una imagen nueva, eliminar la anterior

if (file_exists("imagenes/". $aClientes[$id]["imagen"])){
    unlink("imagenes/". $aClientes[$id]["imagen"]);
}

}
    //estoy editanto
    $aClientes[$id] = array ("dni" => $dni,
    "nombre" => $nombre,
    "telefono" => $telefono,
    "correo" => $correo,
    "imagen" => $nombreImagen);
} else{
    //estoy insertando
    $aClientes[] = array ("dni" => $dni,
    "nombre" => $nombre,
    "telefono" => $telefono,
    "correo" => $correo,
    "imagen" => $nombreImagen);
}
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
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
</head>
<body>
    <main class="container">
    <div class="row">
        <div class="col-12 text-center my-5">
        <h1>Registro de clientes</h1>
    </div>
    <div class="row">
        <div class="col-5">
            <form action="" method="POST" enctype="multipart/form-data">

            <div>
            <label for="txtDni">DNI:*</label>
            <input type="number" name="txtDni" id="txtDni" class="form-control" required value="<?php echo isset(($_GET["id"]))? $aClientes[$id]["dni"] : ""; ?>">
            </div>

            <div>
            <label for="txtNombre">Nombre:*</label>
            <input type="text" name="txtNombre" id="txtNombre" class="form-control" required value="<?php echo isset(($_GET["id"]))? $aClientes[$id]["nombre"] : ""; ?>">
            </div>

            <div>
            <label for="txtTelefono">Telefono:*</label>
            <input type="number" name="txtTelefono" id="txtTelefono" class="form-control" required value="<?php echo isset(($_GET["id"]))? $aClientes[$id]["telefono"] : ""; ?>">
            </div>

            <div>
            <label for="txtCorreo">Correo:*</label>
            <input type="email" name="txtCorreo" id="txtCorreo" class="form-control" required value="<?php echo isset(($_GET["id"]))? $aClientes[$id]["correo"] : ""; ?>">
            </div>
         <p class="my-3">Archivo adjunto: <input type="file" name="archivo" id="" accept=".jpg, ,jpeg, .png"> <br>
        archivos admitivos: .jpg, .jpeg, .png</p>
            <div class="my-3">
                <button type="submit" name="btnGuardar" class="btn bg-primary text-white">Guardar</button>
                <a href="index.php" class="btn btn-danger text-white">NUEVO</a>

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
            <?php foreach ($aClientes as $pos => $cliente) { ?>
        
                <tr>
             <td><img src="imagenes/<?php echo $cliente["imagen"]; ?>" class="img-thumbnail"></td>
             <td> <?php echo $cliente["dni"]; ?> </td>
             <td><?php echo $cliente["nombre"]; ?> </td>
             <td><?php echo $cliente["correo"]; ?> </td>
             <td> <a href="?id=<?php echo $pos; ?>"> <i class="fa-solid fa-pen-to-square"></i></a>
             <a href="?id=<?php echo $pos; ?>&do=eliminar"><i  class="fa-solid fa-trash"></i></a>
            </td>

            </tr>
            <?php } ?>
            
    </main>
</body>
</html>