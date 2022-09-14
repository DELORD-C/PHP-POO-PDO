<?php

class Renderer {

    private $html = "";
    //On donne une valeaur de string vide à notre attribut

    function listOfFilms(array $films) {
        if (empty($films)) { //Si le tableau est vide, on ajoute 'Aucun résultat' à notre attribut html
            $this->html .= 'Aucun résultat';
            return;
        }
        $html = "<div class='row'>"; //On ajoute l'ouverture de notre conteneur dans une variable $html
        foreach ($films as $film) {
            //Pour chaque film, on ajoute les éléments html correspondant avec les données du film à $html
            
            $html .= '
            <div class="col">
                <a href="?film=' . $film->getId() . '" class="card">
                    <img src="' . $film->getPoster() . '" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">' . $film->getName() . '</h5>
                        <p class="card-text">' . $film->getResume() . '</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </a>
            </div>
            ';
        }
        $html .= "</div>"; //On ferme notre conteneur dans $html
        $this->html .= $html; //On ajoute le contenu du $html à notre attribut html
    }

    function searchForm() {
        //On ajoute le formulaire de recherche à notre attribut html
        $this->html .= '
        <form action="">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" placeholder="ex: Shrek" name="query">
                <label for="floatingInput">Rechercher un film</label>
            </div>
            <input type="submit" style="display: none;" value="Recherche">
        </form>
        ';
    }

    function filmDetails(Film $film) {
        $this->html .= '
            <h2>' . $film->getName() . '</h2>
            <img src="' . $film->getPoster() . '">
            <p>' . $film->getResume() . '</p>
        ';
    }

    function render()
    {
        //On récupère le template html
        $page = file_get_contents('Templates/Page.html');
        //On remplace la string '{{content}}' par le contenu de l'attribut html puis on affiche le tout.
        echo str_replace('{{content}}', $this->html, $page);
    }
}