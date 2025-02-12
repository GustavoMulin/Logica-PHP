<?php
// foreach (Para cada) as (como) key: retorna a chave do elemento de um array 

$listafruta = ['Manga', 'Morango', 'Acerola', 'Uva'];
$listafruta[] = 'Goiaba';

foreach($listafruta as $key => $item) {
    echo $key . ' - ' . $item . PHP_EOL;
}