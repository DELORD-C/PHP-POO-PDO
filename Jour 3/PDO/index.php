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
//On exécute la requête
$query->execute();
//On récupère les résultats
$results = $query->fetchAll();

//On récupère un seul résultat
// $results = $query->fetch();

// echo '<pre>';
// var_dump($results);
// echo '</pre>';

$number = 'A017';
$name = 'Jean';
$zone = 'Dunkerk';
$commission = 0.10;
$phone = '+3245698745';
$country = 'Belgium';

$query = $db->prepare("INSERT INTO agents VALUES (:number, :name, :zone, :commission, :phone, :country);");
//les pseudos variable (:number, :name etc...) doivent être populées par la fonction bindParam
$query->bindParam('number', $number);
$query->bindParam('name', $name);
$query->bindParam('zone', $zone);
$query->bindParam('commission', $commission);
$query->bindParam('phone', $phone);
$query->bindParam('country', $country);
$query->execute();