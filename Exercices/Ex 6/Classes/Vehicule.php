<?php

class Vehicule {
    protected string $nom;
    protected int $acceleration;
    protected int $freinage;
    protected string $marque;
    protected int $vitesse = 0;

    function __construct($nom, $acceleration, $freinage, $marque)
    {
        $this->nom = $nom;
        $this->acceleration = $acceleration;
        $this->freinage = $freinage;
        $this->marque = $marque;
    }

    function accelerer() {
        $this->vitesse += $this->acceleration;
    }

    function getVitesse() {
        return $this->vitesse;
    }
}