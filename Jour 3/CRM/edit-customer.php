<?php

include 'init.php';

//On vérifie qu'on a bien un paramètre customer dans $_GET (les paramètre d'url ex: https://index.php?customer=12) et que sa valeur n'est pas vide.
if (isset($_GET['customer']) && !empty($_GET['customer'])) {

    //On vérifie si un formulaire à été envoyé en comptant le nombre de champs dans $_POST, et en vérifiant la valeur d'un d'entre eux
    if (count($_POST) >= 11 && isset($_POST['CUST_NAME']) && !empty($_POST['CUST_NAME'])) {
        //Si un formulaire à été envoyé, on utilise la méthode updateCustomer de l'objet $bdd pour mettre à jour le customer en bdd
        $bdd->updateCustomer($_GET['customer'], $_POST); //mise à jour bdd
    }
    $client = $bdd->getCustomer($_GET['customer']); //récupération de l'objet client en fonction du paramètre $_GET['customer']

    if ($client) { // Si le client existe
        $renderer->customerFormEdit($client); //Affichage du formulaire prérempli
    }
    else { // si le client n'existe pas
        header('Location: index.php'); //on redirige vers l'accueil
    }
}
else { // si pas / mauvais paramètre $_GET
    header('Location: index.php');//on redirige vers l'accueil
}