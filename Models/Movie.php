<?php

class Movie extends Production
{

    public $profitti;
    public $durata;

    public function __construct($_titolo, $_lingua, $_voto, $_profitti, $_durata)
    {


        parent::__construct($_titolo, $_lingua, $_voto, );

        $this->profitti = $_profitti;
        $this->durata = $_durata;
    }

}