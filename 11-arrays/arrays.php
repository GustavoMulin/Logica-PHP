<?php

/* 
1- Arrays são matrizes ou vetores, tambem é considerado um dado do tipo composto.
2- Syntaxe do Array
2.1 Array().
2.2 $variavel - [];
2.3 $variavel[] = 'valor inserido';
3- Debugando / verificando Array
4- Índice do array começa em 0
5- Array associativo.
*/

$lista = ['Gustavo', 27, 'Porto-Velho', 'Solteiro'];
$lista2 = Array('Gustavo', 27, 'Porto-Velho', 'Solteiro');
$lista[] = 'Aplicando lógica com PHP';

$arrayAssoc = [
    'Nome' => 'Gustavo' , 
    'Idade' => 21 ,
    'Estado Civil' => 'Solteiro' ,
    'Estado' => 'Porto-Velho'
];

//echo $arrayAssoc['Nome'] . PHP_EOL;

var_dump($lista, $arrayAssoc);
