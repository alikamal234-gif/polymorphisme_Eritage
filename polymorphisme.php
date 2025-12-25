<?php

/* ==================================================
 * 1. INTRODUCTION À L’HÉRITAGE
 * --------------------------------------------------
 * L’héritage permet à une classe enfant
 * d’hériter des propriétés et méthodes
 * d’une classe parente.
 * ==================================================
 */

// Classe parente (générale)
class Animal
{
    // Propriété commune
    protected $nom;

    // Constructeur
    public function __construct($nom)
    {
        $this->nom = $nom;
    }

    // Méthode commune
    public function parler()
    {
        echo "L’animal fait un son\n";
    }
}


/* ==================================================
 * 2. LE MOT-CLÉ extends
 * --------------------------------------------------
 * Une classe enfant hérite de la classe parente
 * grâce au mot-clé extends.
 * ==================================================
 */

class Chien extends Animal
{
    // Spécialisation : redéfinition (overriding)
    public function parler()
    {
        echo "Le chien aboie\n";
    }
}


/* ==================================================
 * 3. VISIBILITÉS DANS L’HÉRITAGE
 * --------------------------------------------------
 * public    : accessible partout
 * protected : accessible dans la classe + enfants
 * private   : accessible uniquement dans la classe
 * ==================================================
 */

class Chat extends Animal
{
    public function afficherNom()
    {
        // protected est accessible dans la classe enfant
        echo "Nom : " . $this->nom . "\n";
    }

    public function parler()
    {
        echo "Le chat miaule\n";
    }
}


/* ==================================================
 * 4. POLYMORPHISME
 * --------------------------------------------------
 * Même méthode, comportements différents
 * selon le type réel de l’objet.
 * ==================================================
 */

function faireParler(Animal $animal)
{
    // Le comportement dépend de l’objet réel
    $animal->parler();
}


/* ==================================================
 * 5. UTILISATION DU POLYMORPHISME
 * ==================================================
 */

$chien = new Chien("Rex");
$chat  = new Chat("Mimi");

faireParler($chien); // Le chien aboie
faireParler($chat);  // Le chat miaule


/* ==================================================
 * 6. MOT-CLÉ parent::
 * --------------------------------------------------
 * Permet d’appeler une méthode ou un constructeur
 * de la classe parente.
 * ==================================================
 */

class ChienDeGarde extends Chien
{
    public function parler()
    {
        // Appel du comportement parent
        parent::parler();
        echo " (chien de garde)\n";
    }
}


/* ==================================================
 * 7. CLASSES ET MÉTHODES final
 * --------------------------------------------------
 * final empêche l’héritage ou la redéfinition.
 * ==================================================
 */

final class SystemeSecurite
{
    public function activer()
    {
        echo "Système activé\n";
    }
}

// ❌ Impossible d’hériter de SystemeSecurite


class Vehicule
{
    final public function demarrer()
    {
        echo "Le véhicule démarre\n";
    }
}

