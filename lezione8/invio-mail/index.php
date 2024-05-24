<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Modulo di Contatto</title>
</head>
<body>
    <h1>Modulo di Contatto</h1>
    <form action="send-email.php" method="post">
        <label for="name">Nome:</label>
        <input type="text" id="name" name="name" required><br><br>        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>        
        <label for="subject">Oggetto:</label>
        <input type="text" id="subject" name="subject" required><br><br>        
        <label for="message">Messaggio:</label><br>
        <textarea id="message" name="message" rows="5" cols="30" required></textarea><br><br>        
        <button type="submit">Invia</button>
    </form>
</body>
</html>
