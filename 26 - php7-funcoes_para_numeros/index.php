<?php

/*Funções para Números
 * number_format
 * round
 * ceil
 * floor
 * rand
 */

$db = 1234.56;
$preco = number_format($db, 2, ".", ",");
echo "O valor do produto é R$ $preco";
echo "<hr>";

//funcao de arrendondamento
echo round(3.45);
echo "<br>";
echo round(3.65);
echo "<br>";

//funcao de arrendondar mais sempre pra cima
echo ceil(5.10);
echo "<br>";

//funcoes arrendonda pra baixo
echo floor(8.90);
echo "<br>";

//gera numeros aleatorios
echo rand(1,20);

