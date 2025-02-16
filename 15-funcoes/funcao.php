<?php

function soma($n1, $n2) {
    echo $n1 + $n2 . PHP_EOL;
}

soma(40,60);

function apresentacao($nome, $idade, $profissao) {
    echo "Olá $nome, aos $idade, você alcançou a sua profissão de $profissao" . PHP_EOL;
}

$apresentacao = apresentacao('Gustavo', 21, 'Desenvolvedor');

echo $apresentacao;