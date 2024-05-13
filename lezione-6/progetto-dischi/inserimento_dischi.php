<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <a href="index.php">HomePage</a>
        <a href="inserimento_dischi.php">Inserimento disco</a>
        <a href="gestione_dischi.php">Gesione dischi</a>
    </div>

    <h2>Inserimento Disco</h2>

    <form action="aggiungi_disco.php" method="post">
        <div>
            <label for="titolo">Titolo</label>
            <input type="text" name="titolo" id="titolo">
        </div>
        <div>
            <label for="artista">Artista</label>
            <input type="text" name="artista" id="artista">
        </div>
        <div>
            <label for="anno">Anno</label>
            <input type="number" min="1900" name="anno" id="anno">
        </div>
        <input type="submit" value="Aggiungi Disco">


    </form>


</body>

</html>