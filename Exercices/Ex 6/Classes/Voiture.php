<?php

class Voiture extends Vehicule {
    protected int $nbPortes;

    function __construct($nom, $acceleration, $freinage, $marque, $nbPortes)
    {
        $this->nom = $nom;
        $this->acceleration = $acceleration;
        $this->freinage = $freinage;
        $this->marque = $marque;
        $this->nbPortes = $nbPortes;
    }
}