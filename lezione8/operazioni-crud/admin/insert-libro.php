<?php

include 'config.php';
//facciamo i controlli con isset ed empty .... 

$titolo = $_POST['titolo'];
$autore_id = $_POST['autore_id'];
$editore_id = $_POST['editore_id'];
$isbn = $_POST['isbn'];
$anno = $_POST['anno'];
$lingua = $_POST['lingua'];
$prezzo = $_POST['prezzo'];


$sql = "INSERT INTO libri (autore_id, editore_id, titolo, isbn, anno, lingua, prezzo)
VALUES ('$autore_id', '$editore_id', '$titolo', '$isbn', '$anno', '$lingua', '$prezzo')";


if($conn->query($sql)) {
    //*****  aggiungere il codice per l'inserimento delle categorie  ***/
    //otteniamo l'ID di riferimento
    $libro_id = $conn->insert_id;
    if(isset($_POST['categorie'])) {
        $categorie_selezionate = $_POST['categorie']; //per ipotesi contenga [1, 3, 4]
        //cicliamo sull'array $categorie_selezionate 
        foreach($categorie_selezionate as $categoria) {
            $sql_categorie = "INSERT INTO libri_categorie(libro_id, categoria_id) VALUES ('$libro_id', '$categoria')";
            $conn->query($sql_categorie);
        }
    }
    // ************  //
    $msg="ok";
    header("Location: form-libro.php?messaggio=$msg");
    exit();
} else {
    $msg = "Errore durante l'inserimento del libro: " . $conn->error;
    header("Location: form-libro.php?errore=$msg");
}



//  CREATE TABLE `libri` (
//     `id` bigint(20) NOT NULL,
//     `autore_id` bigint(20) NOT NULL,
//     `editore_id` bigint(20) NOT NULL,
//     `titolo` varchar(40) NOT NULL,
//     `isbn` varchar(20) NOT NULL,
//     `anno` year(4) NOT NULL,
//     `lingua` varchar(2) NOT NULL,
//     `prezzo` decimal(5,2) NOT NULL
//   ) ENGINE=InnoDB DEFAULT CHARSET=utf8; 