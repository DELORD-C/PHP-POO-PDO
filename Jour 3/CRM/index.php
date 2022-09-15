<?php

include 'init.php';
//on inclut init.php qui initialize toutes nos classes

$clients = $bdd->getAllCustomers();
//on récupère un tableau avec tous les clients

$renderer->customers($clients);
//on utilise la méthode customers de l'objet  Renderer en lui passant la liste des clients

//équivalent en une seule ligne :
// $renderer->customers($bdd->getAllCustomers());