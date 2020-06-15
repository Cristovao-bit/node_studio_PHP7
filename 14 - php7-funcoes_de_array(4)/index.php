<?php

/** Funções para Array
 * 
 * explode("/", "19/06/2018") - Transformar string em array.
 * implode("-", $array) - Transformar array em string. 
 */

//EXPLODE
$data = "19/06/2018";
$novaData = explode('/', $data);
print_r($novaData);
echo '<br>';

$frase = "Meu nome não é Johnny";
$array = explode(' ', $frase);
print_r($array);
echo '<hr>';

//IMPLODE
$nomes = ['Cristovão', 'Rodrigo', 'Camargo', 'Camarguinho'];
$string = implode(', ', $nomes);
print_r($string);