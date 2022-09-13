<?php

class Moto implements Vehicule {

    use Turbo;

    function accelerer()
    {
        
    }

    function getVitesse()
    {
        
    }

    function wheeling () {
        if ($this->vitesse > 0) {
            return "$this->nom lève sa roue avant !";
        }
    }
}