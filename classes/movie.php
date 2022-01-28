<?php
class Movie
{
    public $titolo;
    public $anno;
    public $regista;
    public $attoreProtagonista;
    public $genere;


    public function __construct($_titolo, $_anno, $_regista, $_attoreProtagonista, $_genere)
    {
        $this->titolo = $_titolo;
        $this->anno = $_anno;
        $this->regista = $_regista;
        $this->attoreProtagonista = $_attoreProtagonista;
        $this->genere = $_genere;
    }

    public function getTitolo()
    {
        return "$this->titolo";
    }
}
