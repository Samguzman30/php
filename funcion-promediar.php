<?php
ini_set ("display errors" ,1);
ini_set("display_startup_errors", 1);
error_reporting(E_ALL);



function promediar($aNumeros){
    $suma = 0;
    foreach ($aNumeros as $numero){
        $suma += $numero; //$suma = $suma + $numero;
    }
    $promedio = $suma / count($aNumeros);
    return $promedio;
    
}
$aNotas = array (8,4,5,3,9,1);

echo "la nota promedio es:" . promediar($aNotas); 
?>