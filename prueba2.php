<?php
ini_set ("display errors" ,1);
ini_set("display_startup_errors", 1);
error_reporting(E_ALL);

function print_f1($variable){
    if (is_array($variable)){
        $contenido = "";
        $archivo1 = fopen("datos.txt" , "w");
//si es array recorrerlo y guardar el contenido en datos.txt
foreach ($variable as $item){
$contenido .= $item . "/n";
fwrite($archivo1, $contenido);
fclose($archivo1);
}
    } else{
        //entonces es string, guardo el contenido en el archivo datos.txt
        file_put_contents("datos.txt", $variable);
    }
    echo "archivo actualizado";
}

$aNotas = array(8,5,7,9,10);
$msg = "este es un mensaje";
print_f1($aNotas);



?>