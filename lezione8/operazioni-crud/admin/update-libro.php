<?php
include 'config.php';

// Controlla se sono stati inviati i dati del modulo
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['libro_id'])) {

    $libro_id = $_POST['libro_id'];
    // Verifica che tutti i campi obbligatori siano stati compilati
    if (!empty($_POST['titolo']) && !empty($_POST['isbn']) && !empty($_POST['anno']) && !empty($_POST['lingua']) && !empty($_POST['prezzo']) && !empty($_POST['autore_id']) && !empty($_POST['editore_id'])) {
        
        // Recupera i dati inviati dal modulo
        $titolo = $_POST['titolo'];
        $isbn = $_POST['isbn'];
        $anno = $_POST['anno'];
        $lingua = $_POST['lingua'];
        $prezzo = $_POST['prezzo'];
        $autore_id = $_POST['autore_id'];
        $editore_id = $_POST['editore_id'];
        $categorie = isset($_POST['categorie']) ? $_POST['categorie'] : []; // Se non ci sono categorie selezionate, assegna un array vuoto
        
        //*********** Aggiorna il libro nel database
        $query_update ="UPDATE libri SET titolo='$titolo', isbn='$isbn', anno='$anno', lingua='$lingua', prezzo='$prezzo', autore_id='$autore_id', editore_id='$editore_id' WHERE id='$libro_id'";
        if($conn->query($query_update)) {
            //rimmuovere le categorie associate dalla tabella libri_categorie
            $query_delete_categorie = "DELETE FROM libri_categorie WHERE libro_id='$libro_id'";
            $conn->query($query_delete_categorie);

            //dopo aver cancellato le categorie associate
            //controllo le nuove categorie inserite dall'utente
            if(!empty($categorie)){
                foreach($categorie as $categoria_id) {
                    $query_insert_categorie = "INSERT INTO libri_categorie(libro_id, categoria_id) VALUES ('$libro_id','$categoria_id')";
                    $conn->query($query_insert_categorie);
                }
            }
            $msg ="Modifica avvenuta con successo";
        }
       
    } else {
        $msg = "Compila tutti i campi obbligatori del modulo.";
    }
} else {
    $msg = "Metodo di richiesta non consentito.";
}

header("Location: modifica-libro.php?id=$libro_id&messaggio=$msg");
exit(); 

$conn->close();
