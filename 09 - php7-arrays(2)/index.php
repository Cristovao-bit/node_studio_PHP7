<?php

//ARRAYS NÚMERICOS
$carros = array(1=>'BMW', 2=>'Veloster', 3=>'Hilux');
$carros[] = "Amarok";
$carros[10] = "Camaro";
//echo $carros[1];
print_r($carros);
echo '<br>';

$motos = [];
$motos[] = "Yamaha";
$motos[] = "Honda";
$motos[5] = "Suzuki";
print_r($motos);
echo '<br>';

$Clientes = ["Cristovão", "Mª Betânia", "Nataly", "Cecília"];
//echo $Clientes[2];
print_r($Clientes);
echo '<hr>';

// COUNT
echo count($carros);
echo '<br>';
echo count($motos);
echo '<br>';
echo count($Clientes);
echo '<br>';

$totalclientes = count($Clientes);
echo $totalclientes;
echo '<hr>';

// Foreach
foreach ($carros as $valor) {
    echo $valor . "<br>";
}

foreach ($Clientes as $values) {
    echo $values . "<br>";
}

foreach($motos as $values){
    echo $values . "<br>";
}