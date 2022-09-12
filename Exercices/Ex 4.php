<?php

Class Voiture {
    public $marque;
    public $modele;
    public $chevaux;

    function __construct(string $marque, string $modele, int $chevaux)
    {
       $this->marque = $marque; 
       $this->modele = $modele; 
       $this->chevaux = $chevaux; 
    }

    function presentation () {
        echo "Cette voiture est une $this->marque $this->modele de $this->chevaux chevaux.";
    }

    static function commander () {
        echo "Pour commander un uber, rendez-vous sur uber.com";
    }
}

$vehicule = new Voiture('Renault', 'Laguna', 120);
$vehicule->presentation();
Voiture::commander();