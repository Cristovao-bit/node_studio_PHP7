<?php
/*** Escalares ***/

//STRING
$nome = "Olá Mundo!";
var_dump($nome);
if(is_string($nome)):
    echo "É uma String";
else:
    echo "Não é uma String";
endif;

//$nome = 123;
//echo "<br>";
//var_dump($nome);
//if(is_string($nome)):
//    echo "É uma String";
//else:
//    echo "Não é uma String";
//endif;
//O que distingui um string e uma não string é as "" duplas.
echo "<hr>";

//INT
$idade = 25;
var_dump($idade);
if(is_int($idade)):
    echo "É um inteiro";
else:
    echo "Não é um inteiro";
endif;

echo "<hr>";

//FLOAT
$altura = 1.69;
var_dump($altura);
if(is_float($altura)):
    echo "É um float";
else:
    echo "Não é um float";
endif;

echo "<hr>";

//BOOLEAN
$admin = true;
var_dump($admin);
if(is_bool($admin)):
    echo "É um booleano";
else:
    echo "Não é um booleano";
endif;

echo "<hr>";

/*** Compostos ***/
$carros = array("Gol", "Uno", "Camaro", 25, 1.69, true);
var_dump($carros);
if(is_array($carros)):
    echo "É um array";
else:
    echo "Não é um array";
endif;

echo "<hr>";

//OBJECT
class Cliente {
    public $nome;
    public function atribuirNome($nome){
        $this->$nome = $nome;
    }
}

$cliente = new Cliente();
$cliente->atribuirNome("Cristovão Lira Braga");
var_dump($cliente);
if(is_object($cliente)):
    echo "É um objeto";
else:
    echo "Não é um objeto";
endif;

echo "<hr>";

/*** Especiais ***/
//NULL
$cidade = NULL;
var_dump($cidade);

//RESOURCE
