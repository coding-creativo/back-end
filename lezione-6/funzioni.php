<?php

// passaggio di parametri per valore
echo "passaggio per valore\n";

function incrementa($numero) {
    $numero++;
    return $numero;
}

$valore = 5;
echo incrementa($valore);
echo "\n";
echo $valore;

echo "\npassaggio per riferimento\n";

//passaggio di parametri per riferimento
function increment(&$num) {
    $num++;
    return $num;
}

$riferimento = 5;
echo increment($riferimento);
echo "\n";
echo $riferimento;

// funzione classica
// function somma($a,$b) {
//     return $a + $b;
// }

// funzioni anonime
$somma = function($a,$b) {
    return $a + $b;
};

//array_filter
$numeri = [6,9,12,13,4,7];

$pari = array_filter($numeri, function($numero){
    return $numero % 2 === 0;
});

var_dump($pari);