<?php

//$cor = 'vermelho';
//$cor = 'verde';
//$cor = 'Azul';
$cor = 'Amarelo';

switch ($cor):
    case "vermelho":
        echo 'Sua cor preferida é Vermelho!';
        break;
    case "verde":
        echo 'Sua cor preferida é Verde!';
        break;
    case "Azul":
        echo 'Sua cor preferida é Azul!';
        break;
    default:
        echo 'Sua cor preferida não é vermelho, nem verde e nem azul!';
endswitch;
