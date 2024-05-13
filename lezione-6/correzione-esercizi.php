<?php
// Esercizi sugli Array Associativi
// Scrivi un programma PHP che crei un array associativo chiamato $studente con le seguenti chiavi e valori:
// "nome" => "Mario"
// "cognome" => "Rossi"
// "età" => 20
// Quindi stampa il nome completo dello studente seguito dalla sua età.
// Poi utilizza un ciclo foreach per stampare tutte le chiavi e i valori dell'array $studente.

$studente = [
    "nome" => "Mario",
    "cognome" => "Rossi",
    "eta" => 20
];

echo "Nome studente: " .$studente["nome"] . " - Età studente: " .$studente["eta"];

echo "\n";
foreach($studente as $key => $item){
    echo "$key : $item\n";
}

// Modifica il programma precedente per aggiornare l'età dello studente a 21 e stampa di nuovo l'intero array per verificare che la modifica sia stata effettuata correttamente. 
// Aggiungi un nuovo elemento all'array $studente chiamato "corso" con il valore "Informatica" e stampa l'array aggiornato.
// Rimuovi l'elemento relativo al corso di studio dall'array $studente e stampa l'array aggiornato.
// Conta il numero di elementi presenti nell'array $studente e stampa il risultato.
// Ordina l'array $studente in base al cognome in ordine alfabetico e stampa l'array ordinato.

$studente["eta"] = 21;
print_r($studente);

$studente["corso"] = "Informatica";
print_r($studente);

unset($studente["corso"]);
print_r($studente);

$conteggio = count($studente);
echo $conteggio;

ksort($studente);
print_r($studente);

// Creare una funzione per determinare se un numero è pari
// Creare una funzione per determinare se un numero è positivo
// Creare una funzione per verificare se una parola è palindroma

// function is_pari($numero){
//     if($numero % 2 == 0) {
//         return true; //provoca l'uscita immediata dalla funzione
//     }         
//     return false;
// }
// echo "inserisci un valore: ";
// $a = intval(trim(fgets(STDIN)));
// var_dump(is_pari($a));

// if(is_pari($a)) {
//     echo "posso fare tutto";
// }

// function is_positive($numero) {
//     if($numero > 0) {
//         return 1;
//     } else if($numero < 0) {
//         return 2;
//     }     
//     return 0;
// }

// $b = -6;
// echo is_positive($b);

// if(is_positive($b) === 1) {
//     echo "numero positivo";
// } else if(is_positive($b) === 2) {
//     echo "numero negativo";
// } else {
//     echo "numero nullo";
// }

function is_palindroma($parola){
    // $parola_inversa = strrev(trim($parola));
    return strtolower(trim($parola)) === strtolower(strrev(trim($parola)));
}

$parola = "  Anna  ";

if(is_palindroma($parola)) {
    echo "palindroma";
} else {
    echo "no palindroma!";
}
