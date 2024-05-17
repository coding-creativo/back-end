<?php
// Include il file con l'array dei dischi
include 'dischi.php';
// Verifica se è stato fornito un ID valido
//!!!! N.B. lo passo con get ma poteva essere passato anche con post come nella gestione dell'inserimento, utilizzando un campo nascosto !!!!!!
if (isset($_GET['id']) && isset($dischi[$_GET['id']])) {
    $id = $_GET['id'];
    $disco = $dischi[$id];
} else {
    // Se l'ID non è valido, reindirizza alla pagina di gestione dei dischi
    header("Location: gestione_dischi.php");
    exit;
}
// Verifica se è stata inviata una richiesta POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica se sono stati settati e non sono vuoti forniti tutti i campi
    if (isset($_POST['titolo']) && isset($_POST['artista']) && isset($_POST['anno'])) {
        // Aggiorna i dettagli del disco
        $dischi[$id]['titolo'] = $_POST['titolo'];
        $dischi[$id]['artista'] = $_POST['artista'];
        $dischi[$id]['anno'] = $_POST['anno'];
        // Salva l'array aggiornato nel file dischi.php
        file_put_contents("dischi.php", "<?php\n\n\$dischi = " . var_export($dischi, true) . ";\n");
        // Reindirizza alla pagina di gestione dei dischi
        header("Location: gestione_dischi.php");
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifica Disco</title>
</head>
<body>
    <h1>Modifica Disco</h1>
    <form action="modifica_disco.php?id=<?php echo $id; ?>" method="post">
        <label for="titolo">Titolo:</label><br>
        <input type="text" id="titolo" name="titolo" value="<?php echo $disco['titolo']; ?>"><br>
        <label for="artista">Artista:</label><br>
        <input type="text" id="artista" name="artista" value="<?php echo $disco['artista']; ?>"><br>
        <label for="anno">Anno:</label><br>
        <input type="text" id="anno" name="anno" value="<?php echo $disco['anno']; ?>"><br><br>
        <button type="submit">Salva Modifiche</button>
    </form>
</body>
</html>
