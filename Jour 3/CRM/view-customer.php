<?php

include 'init.php';

//On vérifie qu'on a bien un paramètre customer dans $_GET (les paramètre d'url ex: https://index.php?customer=12) et que sa valeur n'est pas vide.
if (isset($_GET['customer']) && !empty($_GET['customer'])) {
    $client = $bdd->getCustomer($_GET['customer']); //On récupère le client
    if ($client) { //Si le client existe
        $renderer->customerView($client); //On demande au renderer d'afficher les infos
    }
    else { //Si le client n'existe pas
        header('Location: index.php'); //On redirige vers l'accueil
    }
}
else { //Si pas / mauvais paramètre $_GET
    header('Location: index.php'); //On redirige vers l'accueil
}