<?php

$a=10;
$b=0;

try {
    if ($b == 0)
        throw new Exception("Le dénominateur ne peut être nul.");
    $c = $a / $b;
    echo $c;
}
catch (Exception $e) {
    echo $e->getMessage();
}