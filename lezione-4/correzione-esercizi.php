<?php
// Esercizi sulle istruzioni condizionali per incentivare il problem solving
// Cercare la funzione che determina la lunghezza di una stringa. Prendere poi due stringhe e determinare la più lunga. 
// Cercare la funzione che serve a trasformare in maiuscolo in PHP. Dopo assegnare un valore ad una stringa, trasformarla in maiuscolo e visualizzarla.
// Cercare la funzione che consente di sostituire parti di una stringa in PHP. Dunque scrivete un programma che sostituisce una parte di una stringa con un'altra e poi stampa il risultato. 
// Ad esempio: 
// $frase = “La mela è rossa”; 
// deve diventare $frase = “La fragola è rossa”;  
// Occorre sostituire mela con fragola.
// **** 1.
// $stringa1 = "Paperina";
// $stringa2 = "Pippo Ciao ciao";

// if(strlen($stringa1) > strlen($stringa2)) {
//     echo $stringa1;
// } else if(strlen($stringa1) == strlen($stringa2)) {
//     echo "le stringhe hanno lo stesso numero di lettere";
// } else {
//     echo $stringa2;
// }

//*** 2. */
// $stringa = "ciao";
// $stringa_maiuscola = strtoupper($stringa);
// echo $stringa_maiuscola;

// // *** 3
// $frase = "La mela è rossa";
// $frase_modificata = str_replace("mela", "fragola", $frase);
// echo $frase_modificata;

// Esercizi sulle Istruzioni iterative
// Stampare una sequenza di numeri nell’intervallo [10,50]. (con il for e con il while)
// Stampare i numeri dispari da 1 a 100. (con il for e con il while)
// Stampare la tabellina del 3 (con il for e con il while)
// Stampare una sequenza di numeri pari nell’intervallo [30,60]. 
// Calcolare la somma dei numeri da 10 a 20.
// Calcolare il prodotto dei numeri da 1 a 10.

// for($i = 10; $i <= 50; $i++) {
//     echo $i . ' ';
// }

// for($i = 1; $i <= 100; $i+=2) {
//     echo $i . ' ';
// }

// echo "\n";

// for($i = 1; $i <= 100; $i++) {
//     if($i % 2 !== 0) {
//         echo $i . ' ';
//     }
// }

// Stampare la tabellina del 3 (con il for e con il while)

// for($i = 0; $i <= 10; $i++) {
//     echo "(3 x $i) = ". 3 * $i ." \n";
// }

// $i = 0;

// while($i <= 10) {
//     echo "(3 x $i) = ". 3 * $i ." \n";
//     $i++;
// }

// Stampare una sequenza di numeri pari nell’intervallo [30,60]. 
// for($i = 30; $i <= 60; $i+=2){
//     echo $i . "\n";
// }

// Calcolare la somma dei numeri da 10 a 20.
// $somma = 0;

// for($i = 10; $i <= 20; $i++) {
//     // $somma = $somma + $i;
//     $somma += $i;
// }

// echo $somma;

// somma = 10             ---> somma = somma + 10  
// somma = 10 + 11 = 21   ---> somma = somma + 11
// somma = 21 + 12 = 33   ---> somma = somma + 12
// somma = 33 + 13        ---> somma = somma + 13

// // Calcolare il prodotto dei numeri da 1 a 10.
// $prodotto = 1;

// for($i = 1; $i <= 10; $i++) {
//     // $prodotto = $prodotto * $i;
//     $prodotto *= $i;
// }

// echo $prodotto;

// con il while

$prodotto = 1;
$i = 1;

while($i <= 10) {
    $prodotto = $prodotto * $i;
    $i++;
}

echo $prodotto;


// Esercizi sugli Array
// Create un array di animali e stampate il primo e l’ultimo elemento. Aggiungete poi un altro elemento all’array e visualizzate l’array completo con il var_dump.

// $animali = ['cane', 'gatto', 'elefante', 'gufo'];
// // print_r($animali);
// // echo $animali[1];
// $lunghezza_animali = count($animali);
// echo $lunghezza_animali;
// echo $animali[$lunghezza_animali - 1];
// inserire un nuovo dato
// $animali[] = "leone";
// var_dump($animali);

// Create una array di piante e stampate tutti gli elementi con il ciclo for.
// $piante = ['rosa', 'tulipano', 'orchidea'];

for($i = 0; $i < count($piante); $i++) {
    echo $piante[$i] ." ";
}

$stringa = 'Coding Creativò';
echo mb_strtoupper($stringa);