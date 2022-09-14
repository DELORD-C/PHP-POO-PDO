<?php

include 'Classes/Autoloader.php';

$env = json_decode(file_get_contents('env.json'));
$bdd = new BDD (
    $env->database->type . ':host=' . $env->database->host . ';dbname=' . $env->database->dbname,
    $env->database->user, $env->database->password
);

$renderer = new Renderer;
$renderer->customers($bdd->getAllCustomers());