<?php

// Costruire un array di 5 elementi inserendo in ogni elemento il valore del suo indice.
// Create un array che contiene 10 numeri a piacere e sommate solo i numeri pari.
// Dato un array popolato con della frutta, cercate un frutto specifico e se è presente stampate “Che bello posso fare la macedonia!” altrimenti stampante “Niente macedonia oggi!”.

/***  esercizio 1 */

$array = [];

for($i = 0; $i < 5; $i++) {
    $array[$i] = $i;
}

print_r($array);


/*** esercizio 2 */
$array = range(1, 10);
print_r($array);

$somma = 0;

for($i = 0; $i < count($array); $i++) {
    if($array[$i] % 2 === 0 ) {
        // $somma = $somma + $array[$i];
        $somma += $array[$i];
    }
}

echo $somma;

$sum = 0;

/**** foreach */
foreach($array as $elemento){
    if($elemento % 2 == 0) {
        $sum += $elemento;
    }
}

echo $sum;


/*** esercizio 3 */
$frutta = ['arancia','pera','kiwi'];
$frutto_da_cercare = 'arancia';

if(in_array($frutto_da_cercare, $frutta)) {
    echo "posso fare la macedonia";
} else {
    echo "niente macedonia";
}

/*** dimensione degli array */

$array_unidimensionale = [8,9,10,12];
$array_bidimensionale =[[8,9],[9,12],[4,5]];

?>