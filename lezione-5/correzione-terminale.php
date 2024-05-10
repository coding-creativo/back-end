<?php

// Esercizi sui dati presi da terminale
// Dato un array inizialmente vuoto inserite in esso 10 numeri da terminale.
// Inserite da terminale due numeri e calcolare la loro somma, la sottrazione, la moltiplicazione o la divisione (per la divisione controllate che il divisore sia diverso da zero, prima di effettuare l’operazione).
// Inserite una parola da terminale e verificate se è un palindromo.

/*** esercizio 1 */
// $numeri = [];

// for($i = 0; $i < 10; $i++){
//     echo "inserisci un numero: ";
//     $numeri[] = intval(trim(fgets(STDIN)));
// }

// print_r($numeri);


/***  empty */
// empty dà true per 0, 0.0 , false, array[], "" (stringa vuota), null

// $var; 
// if(empty($var)) {
//     echo "variabile vuota";
// }

/*** isset */
// echo "\n";

// $variabile = null;

// if(isset($variabile)) {
//     echo "è settata";
// } else {
//     echo "non settata";
// }

// if(is_null($variabile)){
//     echo "è nulla";
// } else {
//     echo "non è nulla";
// }


/** esercizio 2 */
echo "inserisci il primo numero: ";
$numero1 = intval(trim(fgets(STDIN)));

echo "inserisci il secondo numero: ";
$numero2 = intval(trim(fgets(STDIN)));

echo "inserisci l'op: ";
$operatore = trim(fgets(STDIN));

switch($operatore) {
    case '+':
        echo "somma: " .($numero1 + $numero2);
        break; //causa l'uscita immediata dallo switch
    case '-':
        echo "differenza: " .($numero1 - $numero2);
        break;
    case '*':
        echo "prodotto: " .($numero1 * $numero2);
        break;
    case '/':
        if($numero2 != 0) {
            echo "divisione: " .($numero1 / $numero2);
        } else {
            echo "non possiamo dividere";
        }        
        break;
    default:
        echo "hai inserito un carattere non valido!";
}

