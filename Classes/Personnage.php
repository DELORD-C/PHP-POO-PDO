<?php

class Personnage {
    protected $nom;
    protected $pdv;
    protected $attaque;

    function __construct(string $nom)
    {
        $this->nom = $nom;
    }

    function attaque ($cible) {
        echo "$this->nom attaque " . $cible->getNom() . " avec $this->attaque points de dégâts.<br>";
        $cible->setPdv($cible->getPdv() - $this->attaque);
    }

    function getNom () {
        return $this->nom;
    }

    function setPdv(int $pdv) {
        $this->pdv = $pdv;
        if ($this->pdv <= 0) {
            $this->mort();
        }
    }

    function getPdv() {
        return $this->pdv;
    }

    function mort() {
        echo "$this->nom est mort.<br>";
    }
}