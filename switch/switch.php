<?php

$dia = 1;

switch ($dia) {
    case 1:
        echo "Domingo" . PHP_EOL;
        break;
    case 2:
        echo "Segunda=Feira" . PHP_EOL;
        break;
    case 3:
        echo "Terça-Feira" . PHP_EOL;
        break;
    case 4:
        echo "Quarta=Feira" . PHP_EOL;
        break;
    case 5:
        echo "Quinta-Feira" . PHP_EOL;
        break;
    case 6:
        echo "Sexta-Feira" . PHP_EOL;
        break;
    case 7:
        echo "Sábado" . PHP_EOL;
        break;
    default:
        echo "Insira um valor válido" . PHP_EOL;
}

$ura = 1;
switch ($ura) {
    case 1:
        echo "Financeiro" . PHP_EOL;    
        break;
    case 2:
        echo "comercial" . PHP_EOL;
        break;
    case 3:
        echo "Falar com atendente" . PHP_EOL;
        break;
    default:
        echo "Insira um valor válido" . PHP_EOL;
}