<?php

class Personnage {
    protected $nom;
    protected $pdv;
    protected $attaque;

    function __construct(string $nom)
    {
        $this->nom = $nom;
    }

    function attaque (Personnage $cible) {
        $nomDeLaCible = $cible->getNom();
        echo "$this->nom attaque $nomDeLaCible avec $this->attaque points de dégâts.<br>";
        $vieActuelle = $cible->getPdv();
        $nouveauPointsDeVie = $vieActuelle - $this->attaque;
        $cible->setPdv($nouveauPointsDeVie);
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