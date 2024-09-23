<?php

// faccio partire la sessione
session_start(); // bisogna farlo per prima cosa
include_once "./model/Canzone.php";
include_once "./controller/CanzoneCtrl.php";
define("TITOLO_SITO", "Calcolatrice");

$menu = [
    ["etichetta" => "Home", "collegamento" => "?"],
    ["etichetta" => "Cantanti", "collegamento" => "?page=cantanti"],
    ["etichetta" => "Canzoni", "collegamento" => "?page=canzoni"],
    ["etichetta" => "PlayList", "collegamento" => "?page=playlist"],
    ["etichetta" => "Generi", "collegamento" => "?page=generi"],
];
