<?php

class MoviesCtrl
{
    private $movies = array(); //[]

    public function scaricaFilm($nome_file)
    {
        echo $nome_file;

        echo $movies = file_get_contents($nome_file);

        $film_php = json_decode($movies, true);
        var_dump($film_php);

        foreach ($film_php as $film) {
            foreach ($film as $filmDaCaricare) {
                $titolo = $filmDaCaricare["titolo"];
                $regista = $filmDaCaricare["regista"];
                $anno = str_replace(['(', ')'], '', $filmDaCaricare["anno"]); // (2024)
                $rating = str_replace('%', '', $filmDaCaricare["rating"]); // 99%

                $mioFilm = new Movie($titolo, $anno, $rating, $regista);
                $this->movies[] = $mioFilm;
            }
        }
    }

    public function svuotaContenitore()
    {
        // unset($this->movies);
        $this->movies=array;
    }

    public function addMovie($movie)
    {
        $this->movies[] = $movie;
    }

    public function getMovies()
    {
        return $this->movies;
    }

    public function getMovieByTitle($titolo)
    {
        foreach ($this->movies as $movie) {
            if ($movie->titolo == $titolo) {
                return $movie;
            }
        }
        return null;
    }

    public function getMovieByRating($min = 0, $max = 100)
    {
        $films = array();

        foreach ($this->movies as $movie) {
            if ($movie->rating >= $min && $movie->rating <= $max) {
                $films[] = $movie;
                // array_push($films, $movie);
            }
        }

        return $films;
    }
}