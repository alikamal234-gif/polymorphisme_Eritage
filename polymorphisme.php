<?php


// Classe parente
class Animal {
   
}

// Classe enfant 1
class Chien extends Animal {
}

// Classe enfant 2
class Chat extends Animal {
    
}

// Polymorphisme simple ecriture
$animal1 = new Chat();
$animal1->parler();

$animal2 = new Chien();
$animal1->parler();

// Polymorphisme bonne pratique ecreture
function set(Animal $animal){
    $animal->parler();
}

set(new chat);
set(new chien);

// final

