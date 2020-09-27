<?php

$carrinho = [
    0 => 'Biscoto',
    1 => 'Sorvete',
    2 => 'Pipoca',
    3 => 'Suco'];

/* 
Função de ordenação arsort do elementos do array;
 - Forma decrescente;
*/

arsort($carrinho);
var_dump($carrinho);

/* 
Função de ordenação asort do elementos do array;
 - Forma crescente;
*/

asort($carrinho);
var_dump($carrinho);

/* 
Função de ordenação sort das chaves e elementos do array;
 - Forma crescente;
*/

sort($carrinho);
var_dump($carrinho);