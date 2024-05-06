<?php

echo "inserisci un dato in input ";
$dati = fgets(STDIN);
var_dump($dati);
echo "hai inserito $dati";

// per prendere degli interi usiamo intval

echo "inserisci un dato in input: ";
$numero = intval(fgets(STDIN));
$numero = floatval(fgets(STDIN));
var_dump($numero);