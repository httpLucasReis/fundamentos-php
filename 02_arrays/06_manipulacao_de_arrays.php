<?php

$nomes = ['Manoel','João','Inácio'];
$idades = [13,6,7,12,15,16,17,60,42,31,53];

// Função end: retorna o último elemento do array

var_dump(end($nomes));

// outra forma

var_dump($nomes[count($nomes)-1]);

// Função array_filter;

$idadesFiltradas =  array_filter($idades, function ($age){
    if($age >= 16){
        return $age;
    }
});

var_dump($idadesFiltradas);

// Função array_map;

$nomesMaiusculos = array_map(function($nome){
    return strtoupper($nome);
}, $nomes);

var_dump($nomesMaiusculos);