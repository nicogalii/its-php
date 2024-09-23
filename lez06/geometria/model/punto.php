<?php

class Punto
{
    private $x, $y;

    public function __construct($x = 0, $y = 0)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function __get($nameProprieta)
    { // Accessori
        return $this->$nameProprieta;
    }


    public function __set($nameProprieta, $valore) // Mutatori
    {
        $this->$nameProprieta = $valore;
    }

    public function setX($x)
    {
        $this->x = $x;
    }

    public function __tostring()
    {
        return "(" . $this->x . ',' . $this->y . ")";
    }
}
