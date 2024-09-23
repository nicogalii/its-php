<?php
include "./Libreria.php";

$libreria = new Libreria();



$file = file("https://raw.githubusercontent.com/maboglia/ProgrammingResources/master/tabelle/libri/Biblioteca2.csv");

foreach ($file as $bookCSV) {
    $booksArray = explode(",", $bookCSV);

    $titolo = $booksArray[3];
    $prezzo = rand(5, strlen($titolo));


    $libreria->addLibro(new Libro($titolo, $prezzo));
}



header("Content-Type:application/json");

echo json_encode($libreria->getLibri());
