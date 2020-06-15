<?php

/** Funções para Array
 * 
 * array_unshift($arr, "valor") — Adiciona um ou mais elementos no início de um array.
 * array_push($array, "valor", "valor") — Adiciona um ou mais elementos no final de um array.
 * array_combine($keys, $values) — Cria um array usando um array para chaves e outro para valores.
 * array_sum() — Calcula a soma dos elementos de um array.
 */

//ARRAY_UNSHIFT
$frutas = ['Uva', 'Banana', 'Maçã'];
print_r($frutas);
echo '<br>';
array_unshift($frutas, 'Mamão', 'Pitanga');
print_r($frutas);
echo '<hr>';

//ARRAY_PUSH
array_push($frutas, 'Manga', 'Morango');
print_r($frutas);
echo '<hr>';

//ARRAY_COMBINE
$key = ['Campeão', 'Vice', 'Terceiro'];
$values = ['Brasil', 'Portugual', 'Japão'];

$copa = array_combine($key, $values);
print_r($copa);
echo '<hr>';

//ARRAY_SUM
$soma = [5,6,8,10];
echo array_sum($soma);
echo '<br>';

$soma = [15,7.5,8.2,30];
$total = array_sum($soma);
echo $total;
