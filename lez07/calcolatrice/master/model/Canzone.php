<?php
class Canzone
{
    function __construct(private $id, private $titolo, private $cantante)
    {
    }
    public function __get($nome)
    {
        return $this->$nome;
    }
    public function __toString()
    {
        return $this->titolo . " " . $this->cantante;
    }
};
