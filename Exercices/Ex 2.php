<?php

function bigger (array $tab) {
    $a = $tab[array_key_first($tab)] ;
    foreach ($tab as $value) {
       if ($value > $a) {
        $value = $a;
       } 
    }
    return $a;
}