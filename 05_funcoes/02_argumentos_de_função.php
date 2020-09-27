<?php

declare(strict_types=1);

// Passando arrays por funções

function takes_array($input)
{
    echo ("input[0] + input[1] = " . ($input[0] + $input[4]));
}

takes_array([1, 2, 3, 4, 5]);

// Passando valores por referência 

echo '<br>';

function add_some_extra(&$string)
{
    $string .= ' e alguma coisa mais.';
}

$str = 'Isto é uma string,';
add_some_extra($str);

echo $str;    // imprime 'Isto é uma string, e alguma coisa mais.'


#3 Utilizando parâmetros padrão em funções

echo '<br>';

function makeCoffee($type = "cappuccino")
{
    return "I'm making a {$type}";
}

$string = makeCoffee();

echo $string;

$string = makeCoffee("Express");

echo "\n{$string}";


#4 Funções com declarão do tipo de retorno (tipagem fraca)

echo '<br>';

function sum(int $a, int $b):int {
    return $a + $b;
}

echo sum(1,2);

#4 Funções com declarão do tipo de retorno (tipagem forte)



function mult(int $a, int $b):int {
    return $a + $b;
}

// Utilizando Catching TyperError.

/* 
primeiro é quando o tipo do argumento passado a uma função não combina com o tipo do parâmetro declarado. O segundo é quando o valor retornado de uma função não combina com o tipo de retorno declarado. O terceiro é quando um número de argumentos inválidos são passados a uma função built-in do PHP (somente no modo restrito). 

declare(strict_types=1) -> Precisa ser colocado no ínício do script

*/


try {
    var_dump(mult(1,2));
} catch(TypeError $error){
    echo 'Error: '.$error->getMessage();
}