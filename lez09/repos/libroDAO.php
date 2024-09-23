<?php
include_once '../model/Libro.php';
include_once '../repos/connessione.php';

class libroDAO
{
    private $connessione;
    private $miaConn;

    public function __construct()
    {
        $this->connessione = new Connessione();
        $this->miaConn = $this->connessione->getConn();
    }




    public function addLibro($libro)
    {
        $query = "INSERT INTO Libri (titolo, pagine, prezzo, autore) value(:titolo, :pagine, :prezzo, :autore)";
        $statement = $this->miaConn->prepare($query);

        $statement->bindParam(':titolo', $libro->titolo, PDO::PARAM_STR);
        $statement->bindParam(':titolo', $libro->pagine, PDO::PARAM_STR);
        $statement->bindParam(':titolo', $libro->prezzo, PDO::PARAM_STR);
        $statement->bindParam(':titolo', $libro->autore, PDO::PARAM_STR);

        $statement->execute();
    }
    public function getLibri()
    {
        $query = "SELET * FROM Libri";
        $resultSet = $this->miaConn->query($query);

        $libri = [];

        while ($record = $resultSet->fetch()) {
            print_r($record);
        }
    }
    public function getLibroById($id)
    {
    }
}
