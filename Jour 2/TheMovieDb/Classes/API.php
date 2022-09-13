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

    function getFilmByName($query) {
        $response = json_decode(
            file_get_contents(
                'https://api.themoviedb.org/3/search/movie?api_key=' . $this->key . '&query=' . $query
            )
        );

        $this->dump($response);
        
        // Il faut modifier le retour de la fonction (car on renvoie 0, 1, ou plusieurs films)
        // return new Film (
        //     $response->original_title,
        //     $response->poster_path,
        //     $response->overview
        // );
    }
}