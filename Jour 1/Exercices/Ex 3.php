<?php

function capitale (string $pays) {
    $pays = strtolower($pays);
    switch ($pays) {
        case 'france':
            return 'Paris';
            break;
        case 'allemagne':
            return 'Berlin';
            break;
        case 'espagne':
            return 'Madrid';
            break;
        case 'portugal':
            return 'Lisbonne';
            break;
        case 'italie':
            return 'Rome';
            break;
        
        default:
            return 'Capitale Inconnue';
            break;
    }
}