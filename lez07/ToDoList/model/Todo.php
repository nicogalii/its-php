<?php
class Todo
{
    private static $counter = 1;
    private $id;
    private $descrizione;
    private $data_creazione;
    private $completato;
    public function __construct($descrizione)
    {
        $this->id = self::$counter++;
        $this->descrizione = $descrizione;
        $this->data_creazione = date("d/m/Y h:i:s");
        $this->completato = false;
    }

    public function __get($name)
    {
        return $this->$name;
    }
    public function completaNota()
    {
        $this->completato = true;
    }

    public function __toString()
    {
        return  $this->id . " - " . $this->descrizione . " - " . $this->data_creazione . " - " . $this->completato;
    }
}
