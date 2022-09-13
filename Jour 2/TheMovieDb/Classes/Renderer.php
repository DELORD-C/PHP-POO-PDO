<?php

class Renderer {

    private $html = "";

    function listOfFilms(array $films) {
        if (empty($films)) {
            $this->html .= 'Aucun résultat';
            return;
        }
        $html = "<ul>";
        foreach ($films as $value) {
            $html .= "<li>" . $value->getName() . "</li>";
        }
        $html .= "</ul>";
        $this->html .= $html;
    }

    function searchForm() {
        $this->html .= "
        <form action=''>
            <input type='text' name='query'>
            <input type='submit' value='Recherche'>
        </form>
        ";
    }

    function render()
    {
        $page = file_get_contents('Templates/Page.html');
        echo str_replace('{{content}}', $this->html, $page);
    }
}