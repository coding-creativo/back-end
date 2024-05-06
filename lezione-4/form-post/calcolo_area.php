<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    //verifica se entrambi i campi sono stati settati - in poche parole verifica se dal form arrivano i campi b e h!
    if((isset($_POST['b'])) && (isset($_POST['h']))) {
        $base = $_POST['b'];
        $altezza = $_POST['h'];
        var_dump($_POST['b']);
    
        $area = $base * $altezza;
        echo $area;
    } else {
        echo "guarda che non hai inserito nulla";
    }
    //se non imposto nessun valore i campi avranno null
}