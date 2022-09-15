<?php

include 'init.php';
//on inclut init.php qui initialize toutes nos classes

//Vérification de la variable $_GET['delete'] et application le cas échéant
if (isset($_GET['delete']) && !empty($_GET['delete'])) {
    $bdd->deleteCustomer($_GET['delete']); //mise à jour bdd
}

$clients = $bdd->getAllCustomers();
//on récupère un tableau avec tous les clients

$renderer->customers($clients);
//on utilise la méthode customers de l'objet  Renderer en lui passant la liste des clients

//équivalent en une seule ligne :
// $renderer->customers($bdd->getAllCustomers());