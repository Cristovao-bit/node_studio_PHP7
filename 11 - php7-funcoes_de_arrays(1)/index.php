<?php

/** Funções para Array
 * 
 * is_array() - verificar se uma determinada variável é um array.
 * in_array($valor, $array) - Checa se um valor existe em um array.
 * array_keys($array) — Retorna todas as chaves ou uma parte das chaves de um array.
 * 
 * link: https://secure.php.net/manual/pt_BR/book.array.php
 */

//IS_ARRAY
$nomes = array('Ceo'=>'Cristovão', 'Mãe'=>'Mª Betânia', 'Irmã'=>'Nataly', 'Sobrinha'=>'Cecília');

if(is_array($nomes)):
    echo "É um array";
else:
    echo "Não é um array";
endif;
echo "<br>";

//IN_ARRAY
if (in_array("Cristovão", $nomes)):
    echo "true";
else:
    echo "false";
endif;
echo "<br>";

//ARRAY_KEYS
$key = array_keys($nomes);
print_r($key);


