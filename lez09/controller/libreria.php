<?php

include_once '../model/Libro.php';


if (isset($_POST)) {
    $titolo = $_POST['titolo'];
    $pagine = $_POST['pagine'];
    $prezzo = $_POST['prezzo'];
    $autore = $_POST['autore'];

    $libro = new Libro('titolo');
    $libro->pagine = $pagine;
    $libro->prezzo = $prezzo;
    $libro->autore = $autore;

    $dao->addLibro($libro);
}

if (isset($_GET['leggi']) && $_GET['leggi'] == 'tutti') {
    return $dao->getLibri();
}
