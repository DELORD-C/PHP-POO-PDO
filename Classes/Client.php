<?php

class Client {
    public $nom;
    public $prenom;

    function __construct($nom, $prenom)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
    }

    static function societe () {
        echo "Ma société DAWAN est super !";
    }
}