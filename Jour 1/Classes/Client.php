<?php

class Client {
    private $nom;
    private $prenom;

    function __construct(string $nom, string $prenom)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
    }

    static function societe () {
        echo "Ma société DAWAN est super !";
    }

    function getNom() {
        return $this->nom;
    }

    function setNom(string $nom) {
        $this->nom = $nom;
    }

    function getPrenom() {
        return $this->prenom;
    }

    function setPrenom(string $prenom) {
        $this->prenom = $prenom;
    }

    function __destruct()
    {
        echo 'Client détruit';
    }
}