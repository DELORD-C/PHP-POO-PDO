<?php

$response = file_get_contents(
    'https://api.themoviedb.org/3/movie/76341?api_key=625b3e1220c0fca7c7ac7f6fcca786ac'
);

$decode = json_decode($response);

echo "<pre>";
var_dump($decode->spoken_languages[0]->name);
echo "</pre>";