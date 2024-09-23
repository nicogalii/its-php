<?php
include './libroDAO.php';

$dao = new libroDAO();

$libro1 = new Libro('I promessi sposi');

$libro1->$pagine = 300;
$libro1->$prezzo = 22.50;
$libro1->$autore = 'A. Manzoni';

$dao->addLibro($libro1);
$dao->addLibro($libro1);
$dao->addLibro($libro1);
$dao->addLibro($libro1);

$dao->getLibri();
