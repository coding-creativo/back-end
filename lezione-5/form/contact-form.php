<?php

// var_dump($_SERVER);

// if($_SERVER["REQUEST_METHOD"] == "POST") {
//         // var_dump($_POST);
//         // echo $_POST['name'];
        

//         if((isset($_POST['name']) && !empty($_POST['name'])) && (isset($_POST['email']) && !empty($_POST['email'])) && (isset($_POST['message']) && !empty($_POST['message']))) {

//             $nome = $_POST['name'];
//             echo "ok - $nome hai inviato il messaggio";
//         } else {
//             echo "devi inserire tutti i dati";
//         }
// }

// Create un form di contatto che deve includere tre campi di input: nome, email e messaggio. Gli utenti devono compilare tutti e tre i campi e per ogni campo mancante deve dare un avviso personalizzato all’utente. Se tutti i campi sono compilati, salutate l’utente

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $avviso = "";
    $errore = false; //valore predefinito : non c'è errore!
    if((!isset($_POST['name']) || empty($_POST['name']))) {
        $errore = true;
        $avviso .= "errore nel campo nome";
    }

    if((!isset($_POST['email']) || empty($_POST['email']))) {
        $errore = true;
        $avviso .= " errore nel campo email";
    }

    if((!isset($_POST['message']) || empty($_POST['message']))) {
        $errore = true;
        $avviso .= " errore nel campo messaggio";
    }

    if(!$errore){ // !false diventa true
        echo "Benvenuto utente " .$_POST['name'];
    } else {
        echo $avviso;
    }

    // var_dump($errore);
}


?>