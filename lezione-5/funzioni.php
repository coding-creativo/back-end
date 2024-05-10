<?php

/*** funzioni senza return e senza argomento*/
saluta();

function saluta() {
    echo "\nciao a tutti";
}

/*** funzioni senza return e con argomento, anche di default*/
function saluto($nome = 'pluto') {
    echo "\nciao da $nome";
}

saluto('Pippo');

$paperino = "Paperino";
saluto($paperino);

saluto();

/** funzione con return */
echo "\n";
function somma($num1, $num2){
    return $num1 + $num2;
}

$risultato = somma(6,7);
echo $risultato;

$a = 8;
$b = 9;

$ris = somma($a, $b);
echo $ris;
?>