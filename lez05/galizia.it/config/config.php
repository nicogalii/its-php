<?php
// Faccio partire l'istruzione      
session_start(); // Spazio di memoria sul server

define('TITOLO_SITO', 'Minerali');

$menu = [
    ['etichetta' => 'Home', 'collegamento' => '?'], //$menu[0][etichetta]
    ['etichetta' => 'Solfuri', 'collegamento' => '?page=solfuri'], //1
    ['etichetta' => 'Ossidi', 'collegamento' => '?page=ossidi'], //2
    ['etichetta' => 'Nitrati', 'collegamento' => '?page=nitrati'], //3
    ['etichetta' => 'Tungstati', 'collegamento' => '?page=tungstati'] //4
];
