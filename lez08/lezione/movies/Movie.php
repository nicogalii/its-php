<?php

class Movie
{
    // stato: lo stato in cui si trovano le proprietà
    private $titolo;
    private $anno;
    private $rating;
    private $regista;

    // metodi: comportamento degli oggetti, le azioni che può compiere o che può subire un oggetto
    // servono per gestire le proprietà degli oggetti

    // costruttore: costruisce / crea un'istanza (esemplare) dell'oggetto e inizializza le proprietà
    public function __construct($titolo, $anno, $rating, $regista)
    {
        $this->titolo = $titolo;
        $this->anno = $anno;
        $this->rating = $rating;
        $this->regista = $regista;
    }

    // getters: accessori
    public function __get($nomeDellaProprieta)
    {
        return $this->$nomeDellaProprieta;
    }

    // setters: mutatori
    public function __set($nomeDellaProprieta, $nuovoValore)
    {
        $this->$nomeDellaProprieta = $nuovoValore;
    }

    public function __tostring()
    {
        return $this->titolo . ' ' . $this->regista;
    }
}