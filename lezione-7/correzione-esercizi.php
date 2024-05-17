<?php

// Esercizi sulle funzioni
// Calcolo della media di tre numeri con una funzione anonima.
// Calcolo dell'area del cerchio con una funzione anonima.
// Filtrare i numeri positivi da un array con array_filter.
// Scrivere una funzione che serve a raddoppiare un numero utilizzando il passaggio di parametri per riferimento.
// Scrivere una funzione che inserisce un singolo elemento in un array passando l'array per riferimento.

$media = function($a, $b, $c){
    return ($a + $b + $c)/3;
};

echo $media(5,8,2);

echo "\n";

$area_cerchio = function($raggio) {
    return pi() * $raggio * $raggio;
};

$raggio = 10;
$area = $area_cerchio($raggio);
// echo $area_cerchio($raggio);
echo number_format($area,3);


$positivi = function($numero){
    return $numero > 0; // : bool 
};

$numeri = [-4, 6, -10, 13, 7];
$array_positivi = array_filter($numeri, $positivi); 
// quando sono funzioni anonime occorre passare la variabile - invece quando sono funzioni normali si passa il nome con gli apici!

var_dump($array_positivi);
echo "\n";
// Scrivere una funzione che serve a raddoppiare un numero utilizzando il passaggio di parametri per riferimento.
function raddoppia(&$numero){
    return $numero *= 2;
}

$num = 5;
echo raddoppia($num);
echo $num;

// Scrivere una funzione che inserisce un singolo elemento in un array passando l'array per riferimento.
function inserisci_elemento(&$array, $elemento){
    $array[] = $elemento;
}

$array_numeri = [9, 5, 3];
inserisci_elemento($array_numeri, 13);

var_dump($array_numeri);

// Creare una funzione che accetta un numero indefinito di parametri e ne restituisce la somma. Che operatore si usa?
// Creare una funzione che accetta un array di numeri come input e restituisce un nuovo array che contiene i quadrati di ciascun numero dell'array di input. Utilizzare la funzione array_map.

function somma_numeri(...$numeri){
    return array_sum($numeri);
}

echo somma_numeri(5,6,9,10,12,3,4,5);
echo "\n";
echo somma_numeri(5,6,7);

function quadrati($numero){
    return $numero * $numero;
}

$array_numeri = [9, 5, 3];
$new_array = array_map('quadrati', $array_numeri);

var_dump($new_array);

// in maniera analoga
$new_array = array_map(function($numero){
    return $numero * $numero;
}, $array_numeri);
