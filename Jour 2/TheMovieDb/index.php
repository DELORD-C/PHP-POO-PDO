<?php

require "Classes/Autoloader.php";

$api = new Api ('625b3e1220c0fca7c7ac7f6fcca786ac');

if (isset($_GET['query'])) {
    $api->getFilmByName($_GET['query']);
}

// $madmax = $api->getFilmById(76341);

// var_dump($madmax);

?>

<form action="">
    <input type="text" name="query">
    <input type="submit" value="Recherche">
</form>