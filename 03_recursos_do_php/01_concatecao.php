<?php

// Operador de concatenação 

$nome = 'Manoel';
$sobrenome = 'Lucas';

echo $nome.' '.$sobrenome;

// Tamplate strings 

$texto = 'meu nome é: ';
$texto2 = 'João';

// É importante utilizar áspas duplas
$texto3 = "{$texto} {$texto2} e eu sou uma pessoa legal";

echo '<br>'.$texto3;