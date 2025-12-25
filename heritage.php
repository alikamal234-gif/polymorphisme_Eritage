<?php

// Classe parente
class Animal {
    public function manger() {
        echo "Je mange\n";
    }
}

// Classe enfant (héritage simple)
class Chien extends Animal {
    public function aboyer() {
        echo "Wouf\n";
    }
}

// Utilisation
$chien = new Chien();
$chien->manger();  
$chien->aboyer();  
