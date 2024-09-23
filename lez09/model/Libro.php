<?php
class Libro
{
    private $id;
    private $titolo;
    private $pagina;
    private $prezzo;
    private $autore;

    public function __construct($titolo)
    {
        $this->$titolo = $titolo;
    }

    public function __get($nomeProprieta)
    {
        return $this->$nomeProprieta;
    }

    public function __set($nomeProprieta, $nuovoValoreProp)
    {
        $this->$nomeProprieta = $nuovoValoreProp;
    }

    public function __toString()
    {
        return "titolo: " . $this->titolo . "autore: " . $this->autore;
    }
}
