<?php

/** Funções para Array
 * 
 * array_values($array) — Retorna todos os valores de um array.
 * array_merge($array, $array) — Combina um ou mais arrays.
 * array_pop($array) — Extrai um elemento do final do array.
 * array_shift($array) — Retira o primeiro elemento de um array.
 */

//ARRAY_VALUES
$nomes = array('CEO'=>'Cristovão', 'Mãe'=>'Mª Betânia', 'Irmã'=>'Nataly', 'Sobrinha'=>'Cecília');
$values = array_values($nomes);
print_r($values);
echo '<hr>';

//ARRAY_MERGE
$carros = ['Camaro', 'Uno', 'Gol'];
$motos = ['cb1000', '50cc', 'Pop100'];

$veiculos = array_merge($carros, $motos);
print_r($veiculos);
echo '<hr>';

//ARRAY_POP
print_r($carros);
echo '<br>';
array_pop($carros);
print_r($carros);
echo '<br>';
echo array_pop($carros) . "<br>";
print_r($carros);
echo '<hr>';

//ARRAY_SHIFT
print_r($motos);
echo '<br>';
array_shift($motos);
print_r($motos);
