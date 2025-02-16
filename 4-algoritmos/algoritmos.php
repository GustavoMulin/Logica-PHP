<?php

/*  ALGORITMOS NA PRÁTICA */

// 1º Algoritmo nome completo
$nome = "Gustavo";
$sobrenome = "Barbosa";
$nomecompleto = $nome . ' ' . $sobrenome;

//echo $nomecompleto . PHP_EOL;

// 2º Algoritmos média aritmética
$nota1 = (float) 10;
$nota2 = (float) 5.8;
$nota3 = (float) 8.7;
$nota4 = (float) 6;
$media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;

//echo "A sua média é de $media";

// 3º Algoritmo mensagem personalizada

$mensagem = "$nomecompleto, você conquistou  a média de $media";

echo $mensagem . PHP_EOL;
