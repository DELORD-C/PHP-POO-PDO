<?php

class Renderer {
    function listOfFilms(array $films) {
        $html = "<ul>";
        foreach ($films as $value) {
            $html .= "<li>" . $value->getName() . "</li>";
        }
        $html .= "</ul>";
        echo $html;
    }

    function searchForm() {
        echo "
        <form action=''>
            <input type='text' name='query'>
            <input type='submit' value='Recherche'>
        </form>
        ";
    }
}