<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //controlliamo con isset ed !empty $_POST['dollars']
    $dollars = $_POST['dollars'];
    $euro = $dollars * 0.82; // Tasso di cambio approssimato
    // Mostra l'importo convertito in euro
    echo "<p>L'importo in euro è: €" . number_format($euro, 2) . "</p>"; 
}

?>