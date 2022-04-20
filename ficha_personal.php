<?php

$nombre = "Samuel Guzman";
$fecha = date("d/m/Y");
$edad = 23;

$aPeliculas array = ("el caballero de la noche, her, la doble vida de veronica");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ficha personal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<main class="container">
        <div class="row">
            <div class="col-12 p-5 text-center">
                <h1> Ficha Personal</h1>
            </div>

        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-hover border">
                    <tbody>
                        <tr>
                            <th>Fecha:</th>
                            <td><?php echo $fecha;  ?> </th>
                        </tr>
                        <tr>
                            <th>Nombre y apellido:</th>
                            <td><?php echo $nombre;  ?></th>
                        </tr>
                        <tr>
                            <th>Edad:</th>
                            <td><?php echo $edad;  ?></th>
                        </tr>
                        <tr>
                            <th>Peliculas favoritas</th>
                            <td><?php echo $aPeliculas (1); ?>  <br>
                                The dark knight <br>
                                La doble vida de Veronica
                        </tr>
                    </tbody>

                </table>

            </div>
        </div>
        <table>

        </table>
</body>
</html>