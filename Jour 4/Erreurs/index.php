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

//on définit une fonction ou l'on divise a par b
function division (int $a, int $b) {
    if ($b == 0) { //si b est égal à 0
        throw new Exception('Division par zéro impossible !', 2);
        // On jete une exception
    }
    return $a / $b;
}

try { // On teste notre fonction
    division(18, 0);
} catch (Throwable $e) {
    // Si il y a une erreur, on l'attrape et on affiche le message de celle-ci
    echo '<pre>';
    // var_dump($e);
    echo $e->getMessage();
    echo '</pre>';
}

echo 'fin';