<?php
// IF(SE) CONDIÇÃO SIMPLES
if (1 > 0) {
    echo "verdadeiro" . PHP_EOL;
} else {
    echo "Entrei no bloco SENÃO" . PHP_EOL;
}

$idade = 27;
$matriculado = false;
$nome = 'Gustavo';

// IF(SE) condições com variáveis
if ($idade > 26 && $matriculado == true) {
    echo "Matriculado" . PHP_EOL;
} else {
    echo"Entrei no bloco SENÃO" . PHP_EOL;
}

//IF(SE) aninhado ELSE IF (SENÃO SE)
if($nome == "Pedro") {
    echo "Verdadeiro" . PHP_EOL;
} else if ($idade === 27) {
    echo "Idade OK" . PHP_EOL;
}else {
    echo "Nada feito";
}
