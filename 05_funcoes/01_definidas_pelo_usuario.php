<?php

// Função normal 

function fatorial($number){
    if($number <= 1){
        return $number;
    } else {
        return $number * fatorial($number - 1);
    }
}

echo (fatorial(2));


