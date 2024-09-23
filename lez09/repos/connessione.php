<?php
class Connessione
{
    private const DB_NAME = "webdev";
    private const HOST = "mysql:host=localhost:3306;dbname=" . self::DB_NAME;
    private const USER = "";
    private const PASS = "";

    private $conn = null;

    public function getConn()
    {
        if ($this->conn == null) {
            $this->connetti();
        }
        return $this->conn;
    }

    private function connetti()
    {

        try {
            $this->conn = new PDO(self::HOST, self::USER, self::PASS);
            echo "Tutto OK, sei connesso!";
        } catch (PDOException $eccezione) {
            echo "Non sei connesso al DB: " . $eccezione->getMessage();
        }
    }
}
