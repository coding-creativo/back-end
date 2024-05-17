<?php
// Include il file con l'array dei dischi
include 'dischi.php';
// Verifica se è stata inviata una richiesta POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica se il campo "action" è stato inviato
    if (isset($_POST['action'])) {
        // Verifica se è stata richiesta l'eliminazione di un disco
        if ($_POST['action'] == "elimina") {
            // Verifica se è stata fornita un'ID valida
            if (isset($_POST['id']) && isset($dischi[$_POST['id']])) {
                $id = $_POST['id'];
                // Rimuovi il disco dall'array
                unset($dischi[$id]);
                // Salva l'array aggiornato nel file dischi.php
                file_put_contents("dischi.php", "<?php\n\n\$dischi = " . var_export($dischi, true) . ";\n");
                // Reindirizza alla pagina di visualizzazione dei dischi
                header("Location: gestione_dischi.php");
                exit;
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestione Dischi</title>
</head>

<body>
    <div>
        <a href="inserimento_dischi.php">Inserisci Nuovo Disco</a>
        <a href="gestione_dischi.php">Gestione dischi</a>
        <a href="index.php">Visualizza tutti i dischi</a>
    </div>
    <h1>Gestione Dischi</h1>
    <h2>Modifica o Elimina Disco</h2>
    <?php foreach ($dischi as $key => $disco) : ?>
        <div>
            <h2>Titolo: <?php echo $disco['titolo']; ?></h2>
            <p>Artista: <?php echo $disco['artista']; ?></p>
            <p>Anno: <?php echo $disco['anno']; ?></p>
            <a href="modifica_disco.php?id=<?php echo $key; ?>">Modifica disco</a>
            <form action="gestione_dischi.php" method="post">
                <input type="hidden" name="id" value="<?php echo $key; ?>">
                <input type="hidden" name="action" value="elimina">
                <input type="submit" value="Elimina Disco" onclick="return confirm('Sei sicuro di voler eliminare questo disco?')">
            </form>
            
            <hr>
        </div>
    <?php endforeach; ?>
</body>

</html>