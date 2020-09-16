<?php

$pessoa = [
    'nome' => 'Manoel',
    'idade' => 16,
    'sexo' => 'Masculino',
];

$endereco = [
    'Bairro' => 'Maiobinha',
    'Rua' => 'São Jorge',
    'Casa' => 13,
];

// Função array_keys: retorna as chaves do array;

var_dump(array_keys($pessoa));

// Função array_values: retorna os valores do array;

var_dump(array_values($pessoa));

// Função count: Retorna a quantidade de itens do array;

var_dump(count($pessoa));

// Função array_merge: junta dois arrays;

var_dump(array_merge($pessoa, $endereco));
