<?php

$carrinho = ['Biscoto','Sorvete','Pipoca','Suco'];

// Função array_pop: remove o último elemento do array;

var_dump(array_pop($carrinho));

// Função array_shift: remove o primeiro elemento do array

var_dump(array_shift($carrinho));


// Função inset: remove um elemento do array ou uma variável;

unset($carrinho[0]);

var_dump($carrinho);


// Função array_push: Adiciona um elemento no final do array;

array_push($carrinho,'Tomate');
var_dump($carrinho);

// Função array_unshift: Adiciona um Elemento no início do array_push
array_unshift($carrinho,'Uvas');
array_unshift($carrinho,'Uvas');
var_dump($carrinho);

// Função array_unique: remove elementos duplicados do array;

var_dump(array_unique($carrinho));