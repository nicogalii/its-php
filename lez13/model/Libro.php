<?php

class Libro
{

    public string $titolo;
    public float $prezzo;
    public bool $disponibile;

    public function __construct(string $titolo, float $prezzo)
    {
        $this->titolo = $titolo;
        $this->prezzo = $prezzo;
        $this->disponibile = true;
    }

    public function getTitolo(): string
    {
        return $this->titolo;
    }

    public function getPrezzo(): float
    {
        return $this->prezzo;
    }

    public function setPrezzo(float $nuovoPrezzo): void
    {
        $this->prezzo = $nuovoPrezzo;
    }

    public function __toString(): string
    {
        return $this->titolo . ' - ' . $this->prezzo . ' - ' . $this->disponibile;
    }
}
