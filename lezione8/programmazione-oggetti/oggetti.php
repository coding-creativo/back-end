<?php

// programmazione ad oggetti è un paradigma di programmazione e si basa sul concetto di oggetto

// classi - una classe si può vedere come un prototipo, un modello

class Automobile {
    //attributi definite anche proprietà - public, private, protected
    private $marca;
    private $modello;
    public $num_porte;

    //costruttore - metodo speciale che stabilisce quali sono gli attributi da utilizzare quando si crea un'istanza non è obbligatorio
    public function __construct($marca, $modello) {
        $this->marca = $marca;
        $this->modello = $modello;
    }


    //funzioni che rappresentano metodi
    public function accendi(){
        echo "la macchina si sta accendendo!";
    }

}

//creiamo un'istanza
$auto1 = new Automobile('Audi', 'Q3');
var_dump($auto1);

// $auto1->marca = "Fiat";
// $auto1->modello ="Topolino";
var_dump($auto1);
$auto1->accendi();
$metodi = get_class_methods($auto1);
var_dump($metodi);