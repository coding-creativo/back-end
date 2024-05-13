<?php 
 include 'dischi.php';
?>
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
    <div>
        <h1>I miei dischi</h1>
        <?php foreach($dischi as $disco): ?>
            <h2>Titolo: <?php echo $disco["titolo"];?></h2>
            <p>Autore: <?php echo $disco["artista"];?></p>
            <p>Anno: <?php echo $disco["anno"];?></p>
            <hr>
        <?php endforeach ?>       
    </div>
</body>

</html>