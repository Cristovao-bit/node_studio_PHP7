<?php

//Funções para Strings
/* strtoupper
   strtolower 
   substr
   str_pad
 */

//todo mundo em maiuscula.
$nome = "cristovão lira braga";
$NovoNome = strtoupper($nome);
echo $NovoNome;
echo "<hr>";

//todo mundo em minuscula.
$Nome = "CRISTOVAO LIRA BRAGA";
$NomeNovo = strtolower($Nome);
echo $NomeNovo;
echo "<hr>";

//contagem de letras.
$mensagem = "Olá Mundo!";
echo substr($mensagem, 4);
echo "<hr>";

//contagem de letra para expressar o comprimento.
$mensagem1 = "Olá Mundo!";
echo substr($mensagem1, 4, 4);
echo "<hr>";

//Ele acrescenta o * no lugar dos espaços. O STR_PAD_LEFT, STR_PAD_RIGHT E O STR_PAD_BOTH é pra onde vão os *.
$objeto = "mouse";
$novoObjeto = str_pad($objeto, 7, "*", STR_PAD_LEFT);
echo $novoObjeto;
echo "<hr>";

//
