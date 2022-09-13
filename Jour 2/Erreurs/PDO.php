<?php

try {
    $pdo = new PDO ("Paramètres invalides");
}
catch(PDOException $e) {
    echo $e->getMessage();
    
}

echo 'Test';