<?php

//On récupère les données du fichier env.json pour en faire un objet
$env = json_decode(file_get_contents('env.json'));

$db = new PDO(
    $env->database->type . ':host=' . $env->database->host . ';dbname=' . $env->database->dbname,
    $env->database->user,
    $env->database->password
);
//On se connecte à la base de donnée en utilisant les paramètres de notre fichier env.json

//On créé notre requête
$query = $db->prepare("SELECT * FROM agents;");