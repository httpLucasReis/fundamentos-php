<?php

$string = 'Manoel';

// strtoupper -> Converter uma string para maiúsculas.

$stringUpper = strtoupper($string);

// strtolower -> Converter uma string para minúsculas.

$stringLower = strtolower($string);

// ucfirst —> Converte para maiúscula o primeiro caractere de uma string

$stringUcFirst = ucfirst($string);

// ucwords —> Converte para maiúsculas o primeiro caractere de cada palavra

$stringUcWords = ucwords($string);


var_dump($string);
var_dump($stringUpper);
var_dump($stringLower);
var_dump($stringUcWords);