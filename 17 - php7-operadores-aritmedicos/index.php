<?php

/** Operadores Aritmedicos
 * 
 * São usados com valores numéricos para executar operações
 * aritmédicas comuns, como adição, subtração, multiplicação etc...
 * 
 * Adição +
 * Substração -
 * Multiplicação *
 * Divisão /
 * Módulo %
 * Exponenciação **
 */

//Adição
echo 10 + 10;
echo '<hr>';

//Subtração
echo 15 - 5;
echo '<hr>';

//Multiplicação
echo 3 * 5;
echo '<hr>';

//Divisão
echo 15 / 5;
echo '<hr>';

//Módulo - A sobra do resultado!
echo 15 % 4;
echo '<hr>';

//Exponenciação
echo 3 ** 5;
echo '<hr>';

$a = 10;
$b = 20;
$c = 30;
$d = 5;
$e = 16;

$adicao = $a + $b;
echo $adicao;
echo '<hr>';

$subtracao = $c - $a;
echo $subtracao;
echo '<hr>';

$multiplicacao = $d * $a;
echo $multiplicacao;
echo '<hr>';

$divisao = $c / $d;
echo $divisao;
echo '<hr>';

$modulo = $e % $d;
echo $modulo;
echo '<hr>';

$expo = $a ** $d;
echo $expo;
echo '<hr>';

echo (2 + 5 + 15 + 30) / 5; 