<?php

//variables
$stock = 0;
if ($stock > 10){
echo "hay stock";
} else {
    echo "no hay stock";
}




//bucles 
for ($i = 0; $i <100; $i+=2){
    echo $i . "<br>";
    
    if ($i == 60){
        break;
    }
    }
?>


$aPersonas =  array();
$aPersonas[] = array("nombre" => "Nelson",
                    "dni" => "95969547",
                    "telefono" => "1145246958",
                    "edad" => 25);

$aPersonas[] = array("nombre" => "Ana Valle",
                    "dni" => "25145214",
                    "telefono" => "1140452943",
                    "edad" => 26);

$_SESSION ["ListadoDePersonas"] = $aPersonas;
