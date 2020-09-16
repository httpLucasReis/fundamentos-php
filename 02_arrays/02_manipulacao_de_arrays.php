<?php 

// Função compact: transforma um conjunto de variáveis em um array

$name = 'Manoel';
$idade = 16;

$pessoa = compact('name','idade');
var_dump($pessoa);

// Função is_array: Verifica se o argumento passado é um array

var_dump(is_array($pessoa));

// Função in_array: Verifica se existe o argumento passado dentro do array

var_dump(in_array('Manoel',$pessoa));