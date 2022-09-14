<?php

class Film {
    private $name;
    private $poster;
    private $resume;
    private $id;

    //en ajoutant ? devant un type, on accepte aussi les valeurs nulles.
    function __construct(string $name, ?string $poster, string $resume, string $id)
    {
        $this->name = $name;
        $this->poster = $poster;
        $this->resume = $resume;
        $this->id = $id;
    }

    function getName() {
        return $this->name;
    }

    function getPoster() {
        if (empty($this->poster)) {
            //si le film n'a pas de poster, on stocke la string suivante (qui vient du fichier env.json) dans $poster
            $poster = json_decode(file_get_contents('env.json'))->default_img;
        }
        else {
            //sinon on stocke le poster du film dans $poster
            $poster = "https://image.tmdb.org/t/p/w200/" . $this->poster;
        }
        return $poster;
    }

    function getResume() {
        return $this->resume;
    }

    function getId() {
        return $this->id;
    }
}