<?php

/*Funcões para strings

  str_repeat
  strlen
  str_replace
  strpos

*/

$string = str_repeat("Sucesso!", 5);
echo $string;
echo "<hr>";

$mensagem = "Olá Mundo!";
echo strlen($mensagem);
echo "<hr>";

$texto = "A seleção Argentina será campeã da copa do mundo de 2018!";
$novoTexto = str_replace("Argentina", "Brasileira", $texto);
echo $novoTexto;
echo "<hr>";
echo strpos($texto, "copa");