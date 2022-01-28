<?php
class Movie
{
    public $titolo;
    public $anno;
    public $produttore;
    public $regista;
    public $attoreProtagonista;
    public $genere;


    public function __construct($_titolo, $_anno, $_produttore,  $_regista, $_attoreProtagonista, $_genere)
    {
        $this->titolo = $_titolo;
        $this->anno = $_anno;
        $this->produttore = $_produttore;
        $this->regista = $_regista;
        $this->attoreProtagonista = $_attoreProtagonista;
        $this->genere = $_genere;
    }
}
