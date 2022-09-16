<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
//on oblige php à afficher ses erreurs

$db = new PDO('mysql:host=localhost;dbname=php', 'root', '');
//on instancie un objet PDO

$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
//on oblige notre objet PDO à afficher ses erreurs

//dans le bloc try on execute le code à tester.
try {
    $query = $db->prepare("SELECT * FROM customer WHERE zoeijfzeofi");
    $query->execute();
    $results = $query->fetchAll();
    var_dump($results);
} catch (PDOException $e) {
    //dans le bloc catch, on traite les éventuelles erreurs
    echo '<pre>';
    // var_dump($e);
    echo $e->getMessage();
    echo '</pre>';
}

echo 'fin';