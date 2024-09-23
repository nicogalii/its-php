<?php

class Triangolo
{
    private $ab, $bc, $ac;

    function __construct(private $a, private $b, private $c)
    {
        $this->ab = new Segmento($a, $b);
        $this->bc = new Segmento($b, $c);
        $this->ac = new Segmento($a, $c);
    } // Assegnazione auto

    public function __get($nameProprieta)
    { // Accessori
        return $this->$nameProprieta;
    }


    public function __set($nameProprieta, $valore) // Mutatori
    {
        $this->$nameProprieta = $valore;
    }

    public function perimetro()
    {
        return $this->ab->lunghezza() + $this->bc->lunghezza() + $this->ac->lunghezza();
    }

    public function superficie()
    {
        $sp = $this->perimetro();

        return sqrt($sp * ($sp - $this->ab->lunghezza()) * ($this->bc->lunghezza()) * ($this->ac->lunghezza()));
    }

    function __tostring()
    {
        return "Il triangolo formato dai punti {$this->a}, {$this->b} e {$this->c}
        ha perimetro di {$this->perimetro()} e superficie di {$this->superficie()}";
    }
}
