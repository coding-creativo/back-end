<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h2>Convertitore Valuta</h2>
    <form action="convert.php" method="post">
        <label for="dollars">Importo in Dollari:</label>
        <input type="number" id="dollars" name="dollars" step="0.01" min="0" required><br><br>
        <input type="submit" value="Converti">
    </form>
    
</body>
</html>