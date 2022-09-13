<?php

class Film {
    private string $name;
    private string $poster;
    private string $resume;

    function __construct(string $name, string $poster, string $resume)
    {
        $this->name = $name;
        $this->poster = $poster;
        $this->resume = $resume;
    }
}