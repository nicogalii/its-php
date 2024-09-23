<?php

include_once '../model/Libro.php';

class Libreria
{
    private $libri = [];

    public function __construct()
    {
        $l1 = new Libro('io robot', 10);
        $l2 = new Libro('tu robot', 12);
        $l3 = new Libro('egli robot', 8);

        $this->addLibro($l1);
        $this->addLibro($l2);
        $this->addLibro($l3);
    }

    public function addLibro(Libro $libro): void
    {
        $this->libri[] = $libro;
    }

    public function getLibri(): array
    {
        return $this->libri;
    }

    public function getLibroByTitolo(string $titolo): ?Libro
    {
        foreach ($this->libri as $libro) {
            if ($libro->getTitolo() == $titolo)
                return $libro;
        }
    }
}
