<?php



if($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST['titolo']) && !empty($_POST['artista']) && !empty($_POST['anno'])) {
        $titolo = $_POST['titolo'];         
        $artista = $_POST['artista'];         
        $anno = $_POST['anno'];
        
        include 'dischi.php';        

        // Aggiungi il nuovo disco all'array dei dischi
        $dischi[] = [
            "titolo" => $titolo,
            "artista" => $artista,
            "anno" => $anno        
        ];

        // Salva l'array aggiornato nel file dischi.php - attenzione ad usare i singoli apici!!!
        file_put_contents('dischi.php', '<?php $dischi = '.var_export($dischi, true).';');

        // Reindirizza alla pagina di visualizzazione dei dischi
        header("Location: index.php");         
        exit; //exit, ci assicura che l'esecuzione dello script venga immediatamente terminata. 

        // N.B.var_export(), converte l'array $dischi in una rappresentazione di stringa. Il secondo argomento true controlla se il risultato della funzione verrà ritornato come un valore che può essere assegnato direttamente a una variabile in PHP.


    }
}

