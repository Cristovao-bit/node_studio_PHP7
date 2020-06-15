<?php

function exibirNome($nome) {
    echo "Meu nome é $nome!";
}

exibirNome("Cristovão Lira Braga");
echo "<hr>";

function calcularMedia($nome, $n1, $n2, $n3, $n4){
    $media = ($n1 + $n2 + $n3 + $n4) / 4;
    if($media >= 7):
        echo "$nome foi aprovado com a média $media! <br>";
    else:
        echo "$nome foi reprovado! <br>";
    endif;
}

calcularMedia("Bob", 5, 7, 9, 10);
calcularMedia("João", 4, 6, 2, 1);
calcularMedia("Maria", 8, 8, 7, 10);
calcularMedia("José", 5, 7, 5, 7);