<?php

/* foreach -> uma forma mais fácil de iterar um array ou 
   um objeto.

   foreach (array_expression as $value)
     statement
    
    ou 

    foreach (array_expression as $key => $value)
    statement

*/

// Exemplo 1: apenas o valor do array.

$array1 = [1,2,3,4,5];

foreach($array1 as $element){
    echo "Elemento {$element}\n";
}

echo '<br>';

$array2 = [
    "one" => 1,
    "two" => 2,
    "three" => 3,
    "four" => 4
];

foreach($array2 as $index => $element){
    echo "[{$index}] = {$element}\n";
}

echo '<br>';


// For

for($i = 0; $i < count($array1); $i++){
    echo "[{$i}] = {$array1[$i]}\n";
}