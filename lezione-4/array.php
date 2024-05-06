<?php
$nomi = ['pippo', 'pluto', 'paperino', 'paperina'];
$nomi_persone = array('Pippo', 'Pluto');

//**** funzioni principali
// in_array verifica se un elemento è presente nell'array. Se è presente restituisce true altrimenti false.
$trovato = in_array('plutos', $nomi);
var_dump($trovato); //restituisce true oppure false

// array_search verifica se un elemento è presente nell'array. Se è presente restituisce il valore di index
$found = array_search('pluto', $nomi);
var_dump($found);

// array_reverse  - inverte l'array
$numeri = [1, 5, 9];
$numeri_invertito = array_reverse($numeri);
var_dump($numeri_invertito);

// array_unique - toglie i duplicati
$numeri = [1, 2, 2, 6];
$numeri_unici = array_unique($numeri);
print_r($numeri_unici);


