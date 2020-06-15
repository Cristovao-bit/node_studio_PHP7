<?php

// Operadores Lógicos
// Nos permite fazer comparações entre expressões
// e (&& - and)
// ou (|| - or)
// ou exclusivo (xor)
// negação (!)

$nome = "Cristovão";
$idade = 26;

//O operador lógico e só vai ser verdadeiro quando as duas expressões forem verdadeiras
if(($nome == "Cristovão") && ($idade == 26)):
    echo "É verdadeiro";
else:
    echo "É falso";
endif;
echo "<hr>";

//O operador lógico ou apresentando uma expressão verdadeira já é o bastante para ser verdadeiro
if(($nome == "Mº Betânia") || ($idade == 26)):
    echo "É verdadeiro";
else:
    echo "É falso";
endif;
echo "<hr>";

//O xor só vai apresentar verdadeiro se somente uma for verdadeira
if(($nome == "Cristovão") xor ($idade == 26)):
    echo "É verdadeiro";
else:
    echo "É falso";
endif;
echo "<hr>";

if(!($nome == "Cristovão") && ($idade == 26)):
    echo "É verdadeiro";
else:
    echo "É falso";
endif;