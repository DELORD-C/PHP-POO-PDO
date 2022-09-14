<?php

class API {
    
    use Dump;
    //Héritage du trait Dump (récupération de ses fonctions)

    private $key;

    function __construct(string $key)
    {
        $this->key = $key;
    }

    function getFilmById($id) {
        //on passe les paramètre (id, et clé, à l'api)
        //on récupère la réponse de l'api et on transforme la string récupérée en objet grâce à json_decode
        $response = json_decode(
            file_get_contents(
                'https://api.themoviedb.org/3/movie/' . $id . '?api_key=' . $this->key
            )
        );
        
        //on instancie un objet Film auquel on passe les données fraichement récupérées et on le retourne aussitôt
        return new Film (
            $response->original_title,
            $response->poster_path,
            $response->overview,
            $response->id
        );
    }

    function getFilmsByName($query) {
        $response = json_decode(
            file_get_contents(
                'https://api.themoviedb.org/3/search/movie?api_key=' . $this->key . '&query=' . $query
            )
        );

        $films = [];//On créé un tableau vide

        foreach ($response->results as $value) { //On itère sur le tableaux de films renvoyé par l'API
            //Pour chaque film on instancie un objet Film et on ajoute celui-ci au tableau $films
            $film = new Film (
                $value->original_title,
                $value->poster_path,
                $value->overview,
                $value->id
            );
            array_push($films, $film);
        }

        //On retourne le tableau
        return $films;
    }
}