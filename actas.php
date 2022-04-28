<?php
ini_set ("display errors" ,1);
ini_set("display_startup_errors", 1);
error_reporting(E_ALL);

$aAlumnos = array();
$aAlumnos[] =array("nombre" => "ana valle", "notas" => array(7,8)); 
$aAlumnos[] =array("nombre" => "sebastian gomez", "notas" => array(7,8));  
$aAlumnos[] =array("nombre" => "lara perez", "notas" => array(7,8));  


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>actas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    <main class="container">
        <div class="row">
            <div class="col-12">
                <h1>Actas</h1>

            </div>

        </div>
        <table class="table table-hover border">
        <tr></tr>

            <th>Alumno</th>
            <th>Nota 1</th>
            <th>Nota 2</th>
            <th>promedio</th>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                
            </tr>



        </table>

    </main>
</body>
</html>