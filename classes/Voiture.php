<?php




// les dossier de class objet commence avec une majuscule et toujours au singulier

class Voiture 
{
    //Attribut (== variables)
    public $couleur; //public $couleur = 'rouge';
        //private $couleur = 'rouge'; //private est la visibilité
        //protected $couleur = 'rouge';
    public $nb_roues = 4;
    public $essence;



    //Méthodes (== functions) Donne l'action

    public function __construct($couleur, $essence) { // S'applique directement au  = new
        $this->couleur = $couleur; // Appliquera la valeur entrée dans $voiture = new Voiture ('bleu');
        $this->essence = $essence;
    }

    public function avance() {
        $this->essence -= 30;
        echo "Vroum vroum la voiture avance !";
    }

    public function prendreEssence($cible) {
        $this->essence += 40;
        $cible->essence -= 40;
        echo "le pleins est fait";
    }


}