<?php

class Moto extends Vehicule {
    function wheeling () {
        if ($this->vitesse > 0) {
            return "$this->nom lève sa roue avant !";
        }
    }
}