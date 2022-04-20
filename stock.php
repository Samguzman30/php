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
