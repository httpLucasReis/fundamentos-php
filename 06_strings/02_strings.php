<?php

$string = '01.02.03.04.05.06';
$array = [1,2,3,4,5,6,7,8,9];

// explode -> Divide uma string em strings

$newString = explode('.',$string); // Retira da string os pontos.

var_dump($newString);

// Implode -> Junta elementos de uma matriz em uma string

$newSecondString = implode("/", $array); // Coloca as barra entra cada elemento do array

var_dump($newSecondString);