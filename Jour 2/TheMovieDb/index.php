<?php

require "Classes/Autoloader.php";
//Le fichier Autoload.php va inclure tous nos fichiers de classe automatiquement.

$api = new Api ('625b3e1220c0fca7c7ac7f6fcca786ac');
//On hydrate/instancie l'objet API en lui passant ntre clé en paramètre

$renderer = new Renderer();
//On hydrate/instancie l'objet Renderer

$renderer->searchForm();
//On utilise la méthode searchForm de l'objet $renderer;

//si les données du formulaire search sont présente dans la variable $_GET
if (isset($_GET['query']) && !empty($_GET['query'])) { 
    $films = $api->getFilmsByName($_GET['query']); //On récupère la liste des films correspondants à la recherche
    $renderer->listOfFilms($films); //On passe la liste des films à notre objet $renderer pour l'affichage
}

if (isset($_GET['film']) && !empty($_GET['film'])) {
    $film = $api->getFilmById($_GET['film']);
    $renderer->filmDetails($film);
}

$renderer->render();
//la méthode render() va afficher toute la page sous forme html.