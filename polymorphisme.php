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
 * grâce au mot-clé extends. Chien
 * ==================================================
 */





/* ==================================================
 * 4. POLYMORPHISME
 * --------------------------------------------------
 * Même méthode, comportements différents
 * function de affich
 * ==================================================
 */



/* ==================================================
 * 5. UTILISATION DU POLYMORPHISME
 * ==================================================
 */


/* ==================================================
 * 6. MOT-CLÉ parent::
 * --------------------------------------------------
 * Permet d’appeler une méthode ou un constructeur
 * de la classe parente.
 * ==================================================
 */



/* ==================================================
 * 7. CLASSES ET MÉTHODES final
 * --------------------------------------------------
 * final empêche l’héritage ou la redéfinition.
 * ==================================================
 */






