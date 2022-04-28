<?php
ini_set ("display errors" ,1);
ini_set("display_startup_errors", 1);
error_reporting(E_ALL);

function maximo($aVector){

$maximo = 0;
foreach ($aVector as $item ){
    if ($maximo < $item){ //recorre todos los array hasta que consiga el mayor
        $maximo = $item; //$maximo sera igual a item una vez que haga el bucle y consiga el mayor
    }
}
return $maximo;
}



$aNotas = array(8,4,5,3,9,1);
$aSueldos = array(800.30, 400.87, 500.45, 300, 900.70, 100, 900, 1800);

echo "la nota maxima es: " . maximo($aNotas) . "<br>";
echo "el sueldo maximo es: " . maximo($aSueldos) . "<br>";
?>