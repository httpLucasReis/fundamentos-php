<?php

// Array simples

// Método 1 

$cars = array(1, 'Carlos', 12.5);
var_dump($cars);

var_dump($cars[0]);
var_dump($cars[1]);
var_dump($cars[2]);

echo '<hr>';

// Método 2

$names = ['Manoel','Inácio','João'];
var_dump($names); 


//Array composto

$car = [
    'cor' => 'Branco',
    'portas' => 4,
    'ano' => 2020,
];

var_dump($car);

var_dump($car['cor']);
var_dump($car['portas']);
var_dump($car['ano']);

$car['placa'] = 204010;

var_dump($car['placa']); 


// Array multidimensional

$cars = [
    'Mercedes' => [
        'Cor' => 'Preto',
        'Motor' => '5.1',
    ],
    'Ford' => [
        'Cor' => 'Azul',
        'Motor' => '2.0',
    ],
    'Ford' => [
        'Cor' => 'Amarelo',
        'Motor' => '7.1',
    ],
];

var_dump($cars['Mercedes']['Cor']); 

