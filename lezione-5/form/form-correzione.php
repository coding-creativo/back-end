<?php

// Create un form di contatto che deve includere tre campi di input: nome, email e messaggio. Gli utenti devono compilare tutti e tre i campi e una volta inviato il form, verrà visualizzato un messaggio di conferma con il nome dell’utente.

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h2>Form di Contatto</h2>
    <form action="contact-form.php" method="post">
        <label for="name">Nome:</label> 
        <input type="text" id="name" name="name"><br><br>
        <label for="email">Email:</label> 
        <input type="email" id="email" name="email"><br><br>
        <label for="message">Messaggio:</label><br>
        <textarea id="message" name="message" rows="4"></textarea><br><br>
        <input type="submit" value="Invia">
    </form>

</body>

</html>