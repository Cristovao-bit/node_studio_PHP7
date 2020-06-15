<?php

// Constantes
define('NOME', 'CRISTOVÃO LIRA BRAGA');
define('IDADE', 26);
define('ALTURA', 1.69);
define('CASADO', FALSE);
define('TIMES', ['BRASIL', 'SENEGAL', 'POLONIA']);

echo 'Meu nome é ' . NOME . ', tenho ' . IDADE . ' com altura ' . ALTURA . '.';
echo '<hr>';
echo TIMES[1];
echo '<br>';
var_dump(TIMES);
//var_dump(NOME, IDADE, ALTURA, CASADO);

echo '<hr>';

//EXIBE DIREITO NO NAVEGADOR DEVIDO AS CONSTANTES SEREM GLOBAIS
function exibeNome(){
    echo NOME;
}

exibeNome();


