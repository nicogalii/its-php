<?php

class Segmento
{
    private $a, $b;

    public function __construct($a = new Punto(), $b = new Punto())
    {
        $this->a = $a;
        $this->b = $b;
    }

    public function __get($nameProprieta)
    { // Accessori
        return $this->$nameProprieta;
    }


    public function __set($nameProprieta, $valore) // Mutatori
    {
        $this->$nameProprieta = $valore;
    }

    public function lunghezza()
    {
        return $this->a->x - $this->b->x;
        return sqrt(pow($this->a->x - $this->b->x, 2) + pow($this->a->y - $this->b->y, 2));
    }
}
