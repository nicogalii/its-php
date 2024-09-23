<?php

class Punto
{
    public $x, $y;

    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }


    public function __tostring()
    {
        return "(" . $this->x . ',' . $this->y . ")";
    }
}
