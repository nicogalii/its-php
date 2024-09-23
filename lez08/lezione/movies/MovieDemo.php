<?php

include ("Movie.php");
include ("MoviesCtrl.php");


$controller = new MoviesCtrl(); // Costruisco l'oggetto

// $film = new Movie("Under the Shadow", 2016, 99, "Babak Anvari");

// $controller->addMovie($film);
// $controller->addMovie($film);
// $controller->addMovie($film);
// $controller->addMovie($film);
// $controller->addMovie($film);

$controller->scaricaFilm("https://raw.githubusercontent.com/maboglia/ProgrammingResources/master/tabelle/film/best-netflix-movies-rt.json");

foreach ($controller->getMovies() as $movie) {
    echo '<h2>' . $movie . '</h2>';
}