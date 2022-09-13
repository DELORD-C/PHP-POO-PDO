<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$a = 10;

echo $a;
echo '<br>';

$a = 15;
$a++;

$a += 5;
$a = $a + 5;
$chaine = 'Bienvenue';
$chaine = $chaine . " chez Dawan";
$chaine .= " chez Dawan";


function direBonjour ($prénom = 'Dawan') {
    echo 'Bonjour ' . $prénom . '<br>';
}

direBonjour('Clément');
direBonjour();

// Opérateurs de comparaison
// ==
// !=
// >
// <
// >=
// <=

if ($a > 10) {
    echo 'Supérieur à 10.';
}
else if ($a > 0) {
    echo 'Compris entre 0 et 10';
}
else {
    echo 'Inférieur à 0';
}

switch ($a) {
    case 10:
        echo 'Dix';
        break;

    case 9:
        echo 'Neuf';
        break;
    
    default:
        echo "Ni neuf, ni dix";
        break;
}
echo '<br>';

for ($i=1; $i < $a; $i++) { 
    echo $i . '<br>';
}

while ($a <= 10) {
    # code...
}

do {
    # code...
} while ($a <= 10);

$tab = ['a' => 1, 'b' => 2, 3, 4];

foreach ($tab as $key => $value) {
    echo $key . ' => ' . $value . '<br>';
}

require 'Classes/Client.php';

$client1 = new Client('DELORD', 'Clément');

