<?php

require_once __DIR__ . '/index.php';

class TVSerie extends Production
{
    public $stagioni;

    public function __construct($titolo, $lingua, $_voto, $img, $_stagioni)
    {
        $this->stagioni = $_stagioni;
        parent::__construct($titolo, $lingua, $_voto, $img);
    }
}
