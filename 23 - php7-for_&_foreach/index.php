<?php

//for quer dizer "para"
for ($contador = 0; $contador <= 10; $contador++):
    echo "8 x $contador = " . ($contador * 8) . "<br>";
endfor;
echo "<hr>";

//o foreach foi criado para percorre arrays e significa "para cada"
$cores = array("Vermelho", "Verde", "Azul");

foreach ($cores as $indice => $value):
    echo $indice . " - " . $value . "<br>";
endforeach;
echo "<hr>";

//Exercício
for ($contador = 0; $contador <= 10; $contador++):
    echo "2 x $contador = " . ($contador * 2) . "<br>";
endfor;
echo "<br>";

for($contador = 0; $contador <= 10; $contador++):
    echo "3 x $contador = " . ($contador * 3) . "<br>";
endfor;
echo "<br>";

for($contador = 0; $contador <= 10; $contador++):
    echo "4 x $contador = " . ($contador * 4) . "<br>";
endfor;
echo "<br>";

for($contador = 0; $contador <= 10; $contador++):
    echo "5 x $contador = " . ($contador * 5) . "<br>";
endfor;
echo "<br>";

for($contador = 0; $contador <= 10; $contador++):
    echo "6 x $contador = " . ($contador * 6) . "<br>";
endfor;
echo "<br>";

for($contador = 0; $contador <= 10; $contador++):
    echo "7 x $contador = " . ($contador * 7) . "<br>";
endfor;
echo "<br>";

for($contador = 0; $contador <= 10; $contador++):
    echo "8 x $contador = " . ($contador * 8) . "<br>";
endfor;
echo "<br>";

for($contador = 0; $contador <= 10; $contador++):
    echo "9 x $contador = " . ($contador * 9) . "<br>";
endfor;
echo "<br>";

for($contador = 0; $contador <= 10; $contador++):
    echo "10 x $contador = " . ($contador * 10) . "<br>";
endfor;
echo "<br>";