<?php

//****** verificare se un numero è positivo, negativo oppure nullo
 $numero = 0;

 //if annidati
//  if($numero > 0) { //se è vera esegue le istruzioni all'interno delle parentesi graffe
//     echo "il numero è positivo";
//  } else { // se la condizione non è vera esegue il codice tra le parentesi graffe dell'else
//     echo "il numero non è positivo";
//     if($numero == 0) {
//         echo "il numero è nullo";
//     } else {
//         echo "il numero è negativo";
//     }
//  }

 if($numero > 0) {
    echo "il numero è positivo";
 } elseif($numero == 0) {
    echo "il numero è nullo";
 } else {
    echo "Il numero è negativo";
 }

//****** verificare se un numero è pari i dispari

$a = 101;

// if($a % 2 == 0) {
//     echo "il numero è pari!";
// } else {
//     echo "il numero è dispari!";
// }

if($a % 2 != 0) {
    echo "il numero è dispari!";
} else {
    echo "il numero è pari!";
}

?>