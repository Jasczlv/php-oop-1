<?php

require_once __DIR__ . '/index.php';

class Movie extends Production
{
    public $profitti;
    public $durata;

    public function __construct($titolo, $lingua, $_voto, $img, $_profitti, $_durata)
    {
        $this->profitti = $_profitti;
        $this->durata = $_durata;
        parent::__construct($titolo, $lingua, $_voto, $img);
    }
}
