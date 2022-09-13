<?php

require "Classes/Autoloader.php";

$api = new Api ('625b3e1220c0fca7c7ac7f6fcca786ac');
$renderer = new Renderer();

$renderer->searchForm();

if (isset($_GET['query']) && !empty($_GET['query'])) {
    $films = $api->getFilmsByName($_GET['query']);
    $renderer->listOfFilms($films);
}