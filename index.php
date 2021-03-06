<?php
ini_set ("display errors" ,1);
ini_set("display_startup_errors", 1);
error_reporting(E_ALL);



if($_POST){
    $nombre = $_POST["txtNombre"];
    $clave = $_POST["txtClave"];
   if ($nombre != "" && $clave != ""){
    header("location: acceso-confirmado.php");
   }else{

    $mensaje = "Valido para usuarios registrados.";
   }
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <main class="container">
        <div class="row">
            <div class="col-12 text-center mb-4">
            <h1>Formulario</h1>
            </div>
            </div>
            <?php if (isset ($mensaje)){ ?> //isset para saber si tiene valor
            <div class="alert alert-danger" role="alert">
            <?php echo $mensaje; ?>
            </div>
            <?php } ?> 
            
            <div class="row">
                <div class="col-12">
                    <form action="" method="post">
                        <div>
                        <label for="txtNombre">Nombre</label>
                        <input type="text" name="txtNombre" class="form-control" id="txtNombre">
                        </div>
                        <div>
                    <label for="txtClave">Clave</label>
                    <input type="password" name="txtClave"  class="form-control mb-3" id="txtClave">
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </div>


                    </form>

                </div>

            </div>
            

        </div>

    </main>
</body>
</html>