<?php

class Film {
    private $name;
    private $poster;
    private $resume;

    function __construct(string $name, string $poster, string $resume)
    {
        $this->name = $name;
        $this->poster = $poster;
        $this->resume = $resume;
    }
}