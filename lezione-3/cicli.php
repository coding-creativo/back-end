<!-- stampare i numeri da 0 a 9 -->

<?php

// for($i = 0; $i < 10; $i++) {
//      echo $i . " ";
// }
// echo  "\n";

// // con il while

// $i = 0; //inizializzazione

// while($i < 10) {
//     echo $i . " ";
//     $i++;
// }

// stampare i numeri da 10 a 1

// for($i = 10; $i > 0; $i--) {
//     echo $i . " ";
// }

// echo  "\n";
// // stampare i numeri pari da 0 a 10
// for($i = 0; $i <= 10; $i+=2) {
//     echo $i . " ";
// }

$numeri = [8, 13, '6', 9, 20, 22]; //array di numeri
$lunghezza = count($numeri);

echo $numeri[1] . "\n";
echo $numeri[count($numeri) - 1] . "\n";
echo $numeri[$lunghezza - 1] . "\n";

// var_dump($numeri);
// print_r($numeri);

echo $lunghezza ."\n";

for($i = 0; $i < count($numeri); $i++) {
    echo "indice: $i - elemento $numeri[$i] \n";
}

$frutta = []; //inizializzando array vuoto
$frutta[] = "Mela";
$frutta[] = "Arancia";

var_dump($frutta);



?>