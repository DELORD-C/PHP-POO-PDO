<?php

class Avion extends VehiculeVolant {
    function accelerer () {
        if ($this->vitesse == 0) {
            $this->vitesse = $this->acceleration;
        }
        else {
            $this->vitesse *= $this->acceleration;
        }
    }
}