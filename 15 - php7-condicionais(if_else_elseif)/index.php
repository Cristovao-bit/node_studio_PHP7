<?php

//$numero = 10;
//$numero = 15;
$numero = 8;

if ($numero == 10):
    echo 'É igual a 10!';
elseif ($numero <= 9):
    echo 'É menor ou igual a 9';
else:
    echo 'É diferente de 10!';
endif;
echo '<hr>';

//Operador ternario
//$media = 7;
$media = 5;

echo ($media >= 7) ? 'Aprovado!' : 'Reprovado!';
