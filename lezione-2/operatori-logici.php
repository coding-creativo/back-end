<?php 
    $a = -10;
    $b = 20;

    // if($a > 0 && $b > 0) { // con l'and (&&) devono essere entrambe vere
    //     echo "i numeri sono entrambi positivi";
    // } else {
    //     echo "i numeri non sono entrambi positivi";
    // }

    if($a > 0 || $b > 0) { // con l'or (||) almeno una delle due deve essere vera
        echo "almeno uno dei due numeri è positivo";
    } else {
        echo "i numeri sono entrambi negativi";
    }

    echo "\n ciao";

    $x = -5;

    if($x > 0) {
        echo "il numero è positivo!";
    } else {
        echo "il nnumero non è positivo";
    }

    if(!($x > 0)) {
        echo "il numero non è positivo";
    }

?>