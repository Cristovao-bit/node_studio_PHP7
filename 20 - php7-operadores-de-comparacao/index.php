<?php

//Operadores de Comparação
// == (igual)
// != (não igaul)
// === (identico)
// !== (não identico)
// <> (diferente)
// < (menor)
// > (maior)
// <= (menor igual)
// >= (maior igual)
// <=> (diferente igual)

//aqui ele quer saber se é igual independente da situação.
if(10 == "10"):
    echo "Positivo";
else:
    echo "Negativo";
endif;
echo "<hr>";

if(10 != 10):
    echo "Positivo";
else:
    echo "Negativo";
endif;
echo "<hr>";

//a diferença do == é que aqui ele quer saber se é identico.
if(10 === 10):
    echo "Positivo";
else:
    echo "Negativo";
endif;
echo "<hr>";

if(10 !== 10):
    echo "Positivo";
else:
    echo "Negativo";
endif;
echo "<hr>";

if(10 <> 11):
    echo "Positivo";
else:
    echo "Negativo";
endif;
echo "<hr>";

if(10 < 30):
    echo "Positivo";
else:
    echo "Negativo";
endif;
echo "<hr>";

if(10 > 9):
    echo "Positivo";
else:
    echo "Negativo";
endif;
echo "<hr>";

if(100 >= 10):
    echo "Positivo";
else:
    echo "Negativo";
endif;
echo "<hr>";

if(100 <= 10):
    echo "Positivo";
else:
    echo "Negativo";
endif;
echo "<hr>";

//Este operador apresenta três valores (-1, 0, 1)
//se o lado esquerdo apresentar um valor menor que o direito então será -1
//se o ambos os valores forem iguais então será 0
//se o lado direito apresentar um valor menor que o esquerdo então será 1
var_dump(6 <=> 10);