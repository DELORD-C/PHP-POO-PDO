<?php

require "Classes/Autoloader.php";

$vehicule=new Vehicule("Patin-A-Glace", 2, 0, "Glissade");
$volant=new VehiculeVolant("Drone", 15, 15, "DJI");
$moto=new Moto("Speed Triple", 50, 40, "Triumph");
$bateau = new Bateau("PetitBateau", 5, 2, "Costa");
$avion = new Avion("A320", 200, 50, "Airbus");
$helico = new Helicoptere("CH7", 150, 140, "Kompress");
$voiture = new Voiture("RX8", 75, 50, "Mazda", 4);

echo $moto->TVA;
echo Moto::TVA;
echo Vehicule::TVA;

$moto->turbo();