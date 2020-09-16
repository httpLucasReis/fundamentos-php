<?php

// Impressão com echo
echo '<hr>';
echo 'Impressão com echo:';
echo '<br>';
echo 123;
echo '<br>';
echo 'Hello word';
echo '<hr>';

// Impressão com print

print '<hr>';
print 'Impressão com o print';
print '<br>';
print '12345';
print '<br>';
print 12345;
print '<hr>';

// Impressão com Print_r: só funciona com arrays
echo '<hr>';
echo 'Impressão com print_r:';
echo '<br>';
$varArray = [1,2,3,4,5];

print_r($varArray);

echo '<hr>';

// Impressão com vardump: debug de dados;
echo '<hr>';
echo 'Impressão com o var_dump:';
echo '<br>';

var_dump("Teste com var_dump()");

echo '<hr>';