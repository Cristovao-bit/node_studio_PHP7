<?php

//ARRAYS ASSOCIATIVOS
$pessoa = array("Nome" => "Cristovão", "Idade" => 26, "Altura" => 1.70);
$pessoa["Cidade"] = "Esperança";
//echo $pessoa["Nome"];
print_r($pessoa);
echo '<hr>';

foreach ($pessoa as $indice => $valor) {
    echo $indice . ": " . $valor . "<br>";
}
echo '<hr>';

//ARRAYS MULTIDIMENSIONAIS
$times = array(
    "Cariocas" => array("Campeão" => "Vasco", "Vice" => "Flamengo", "Terceiro" => "Botafogo"),
    "Paulistas" => array("Campeão" => "Santos", "Terceiro" => "São Paulo", "Vice" => "Palmeiras"),
    "Bahianos" => array("Terceiro" => "Bahia", "Campeão" => "Vitória", "Vice" => "Itabuna")
);
//print_r($times);
echo $times["Paulistas"]["Vice"];
echo '<hr>';

foreach ($times["Cariocas"] as $indice => $value) {
    echo $indice . ": " . $value . "<br>";
}
echo '<hr>';

foreach ($times["Paulistas"] as $indice => $values){
    echo $indice . ": " . $values . "<br>";
}
echo '<hr>';

foreach ($times["Bahianos"] as $indice => $values) {
    echo $indice . ": " . $values . "<br>";
}