<?php

include 'Classes/Autoloader.php';
//On inclut automatique tout les fichiers de classes de notre dossier Classes

$renderer = new Renderer;
//On instancie un objet Renderer

$env = json_decode(file_get_contents('env.json'));
//On récupère les variables d'environnement dans env.json et on les transforme en objet.

$bdd = new BDD (
    $env->database->type . ':host=' . $env->database->host . ';dbname=' . $env->database->dbname,
    $env->database->user, $env->database->password
);
//On instancie un objet BDD en envoyant les paramètre de connexion à la bdd