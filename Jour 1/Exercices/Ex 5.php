<?php

function dump ($a) {
    echo '<pre>';
    var_dump($a);
    echo '</pre>';
}

include '../Classes/Personnage.php';
include '../Classes/Mage.php';
include '../Classes/Guerrier.php';
include '../Classes/Voleur.php';

$mage = new Mage ('Gandalf');
$guerrier = new Guerrier ('Gimly');
$voleur = new Voleur ('Legolas');


$mage->attaque($voleur);
$mage->attaque($voleur);
$mage->attaque($voleur);

dump($voleur);

echo $mage->attaque;