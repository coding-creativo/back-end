<!-- Primi esercizi
1. Crea due variabili che rappresentano la base e l’altezza di un rettangolo.
Calcola l'area del rettangolo ed il perimetro.
2. Assegna ad una variabile un importo in dollari, convertirlo in € e visualizzalo
nella pagina. Supponiamo un tasso di cambio fisso.
3. Crea una variabile che rappresenta il prezzo originale di un prodotto e
un'altra variabile per lo sconto percentuale. Calcola il prezzo scontato e
stampa il risultato.
Istruzioni condizionali
1. Calcola il massimo fra due numeri.
2. Convertire una valutazione numerica in una lettera corrispondente (Es. se
10 scrivi A, ecc.).
3. Verifica se un numero è multiplo di 3.
4. Calcola il massimo fra tre numeri.
Operatori logici
1. Assegna ad una variabile numero un valore e verifica se è compreso tra 50
e 100.
2. Assegna ad una variabile anno un valore e verifica se è bisestile.
3. Determina se una persona può guidare un'auto in base all'età e alla
presenza di una patente. -->


<!-- 1. Crea due variabili che rappresentano la base e l’altezza di un rettangolo. Calcola l'area del rettangolo ed il perimetro.-->
<?php

$base = 6;
$altezza = 10;

$area = $base * $altezza;
$perimetro = 2 * ($base + $altezza);

echo "Il nostro rettangolo ha area: $area - e perimetro: $perimetro";

?>

<!-- 2. Crea una variabile che rappresenta il prezzo originale di un prodotto e
un'altra variabile per lo sconto percentuale. Calcola il prezzo scontato e
stampa il risultato. -->

<?php

$prezzo = 117.7;
$sconto = 30;

// $prezzo_scontato = $prezzo - ($prezzo * $sconto / 100);
$prezzo = $prezzo - ($prezzo * $sconto / 100);
// $prezzo -= ($prezzo * $sconto / 100);

echo "il prezzo scontato è: $prezzo";
echo "il prezzo scontato è: round($prezzo, 2)";
echo "il prezzo scontato è: " . round($prezzo, 2);

echo "\n"; 
// <br> per andare a capo nel browser
//  1. Calcola il massimo fra due numeri.

$numero1 = 50;
$numero2 = 150;

// if($numero1 > $numero2) {
//     echo "il maggiore è: $numero1";
// } elseif($numero1 == $numero2) {
//     echo "i numeri sono uguali";
// } else {
//     echo "il maggiore è: $numero2";
// }

if($numero1 > $numero2) {
    echo "il maggiore è: $numero1";
} else {
    echo "il maggiore è: $numero2";
}

// Convertire una valutazione numerica in una lettera corrispondente (Es. se
// 10 scrivi A, ecc.).
echo "\n"; 
$voto = 10;

if($voto >= 9) {
    echo "A";
} elseif($voto >= 8) {
    echo "B";
} elseif($voto >= 7) {
    echo "C";
} elseif($voto >= 6) {
    echo "D";
} else {
    echo "insufficiente - E";
}

// Verifica se un numero è multiplo di 3.
echo "\n"; 
$numero = '6';

$resto = $numero % 3;
var_dump($resto);

echo "\n"; 

if($numero % 3 === 0) {
    echo "il numero è multiplo di 3";
} else {
    echo "il numero non è multiplo di 3";
}

echo "\n";
// operatori di identità === oppure non identità !==
$a = 5;
$b = 5;

if($a === $b) {
    echo 'i numeri sono uguali anche nel tipo';
} else {
    echo 'i numeri non sono uguali';
}

echo "\n";
if($a !== $b) {
    echo 'diversi';
} else {
    echo 'uguali anche nel tipo';
}

// Calcola il massimo fra tre numeri.
echo "\n";
$x = 1191;
$y = 700;
$z = 1200;

if($x > $y) { //se è vera - y non sarà mai il maggiore
    if($x > $z) {
        echo "il maggiore è $x";
    } else {
        echo "il maggiore è $z";
    }
}  else { //se non è vera la condizione - y è maggiore
    if($y > $z) {
        echo "il maggiore è $y";
    } else {
        echo "il maggiore è $z";
    }
}

echo "\n";
$massimo = $x;

if($y > $massimo) {
    $massimo = $y;
}

if($z > $massimo){
    $massimo = $z;
}

echo $massimo;

// Assegna ad una variabile numero un valore e verifica se è compreso tra 50
// e 100.
echo "\n";
$num = 60;

if($num >= 50 && $num <= 100) {
    echo "il numero è compreso";
} else {
    echo "il numero non è compreso";
}

// Assegna ad una variabile anno un valore e verifica se è bisestile.
// gli anni non secolari il cui numero è divisibile per 4;
// gli anni secolari il cui numero è divisibile per 400.
echo "\n";
$anno = 1800;

if(($anno % 400 === 0) || ($anno % 4 === 0 && $anno % 100 !== 0)) {
    echo "anno bisestile";
} else {
    echo "non è un anno bisestile";
}
 
?>