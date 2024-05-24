<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanificazione e validazione dei dati
    $name = htmlspecialchars(trim($_POST["name"]), ENT_QUOTES, 'UTF-8');
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $subject = htmlspecialchars(trim($_POST["subject"]), ENT_QUOTES, 'UTF-8');
    $message = htmlspecialchars(trim($_POST["message"]), ENT_QUOTES, 'UTF-8');

    // Verifica che tutti i campi siano stati compilati
    if (empty($name) || empty($email) || empty($subject) || empty($message)) {
        echo "Tutti i campi sono obbligatori.";
        exit;
    }

    // Verifica email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Indirizzo email non valido.";
        exit;
    }

    // Destinatario dell'email
    $to = "cristinagalfo@gmail.com";
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=utf-8\r\n";

    // Composizione del messaggio
    $email_message = "Nome: $name\n";
    $email_message .= "Email: $email\n";
    $email_message .= "Oggetto: $subject\n";
    $email_message .= "Messaggio:\n$message\n";

    // Invio dell'email
    if (mail($to, $subject, $email_message, $headers)) {
        echo "Email inviata con successo.";
    } else {
        echo "Errore nell'invio dell'email.";
    }
} else {
    echo "Metodo di richiesta non valido.";
}
?>
