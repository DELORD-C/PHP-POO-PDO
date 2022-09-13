<?php

class API {
    
    use Dump;

    private $key;

    function __construct(string $key)
    {
        $this->key = $key;
    }

    function getFilmById($id) {
        $response = json_decode(
            file_get_contents(
                'https://api.themoviedb.org/3/movie/' . $id . '?api_key=' . $this->key
            )
        );
        
        return new Film (
            $response->original_title,
            $response->poster_path,
            $response->overview
        );
    }

    function getFilmsByName($query) {
        try {
            $response = json_decode(
                file_get_contents(
                    'https://api.themoviedb.org/3/search/movie?api_key=' . $this->key . '&query=' . $query
                )
            );
        }
        catch (Exception $e) {
            echo "Une erreur s'est produite";
        }

        if (empty($response->results)) {
            echo "Aucun résultat";
        }

        $films = [];
        foreach ($response->results as $value) {
            $film = new Film (
                $value->original_title,
                $value->poster_path,
                $value->overview
            );
            array_push($films, $film);
        }
        return $films;
    }
}