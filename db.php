<?php

class Movie
{

    public $title;
    public $director;
    public $year;
    public $genres;


    public function __construct($title, $director, $year, ...$genres)
    {
        $this->title = $title;
        $this->director = $director;
        $this->year = $year;
        $this->genres = $genres;
    }


    public function getMovieInfo()
    {
        $genreString = implode(', ', $this->genres);
        return "Titolo: {$this->title}, Regista: {$this->director}, Anno: {$this->year}, Generi: {$genreString}";
    }
}




$movies = [];

$movies[] = new Movie("Kill Bill: Volume 1", "Quentin Tarantino", 2003, "Azione", "Thriller");
$movies[] = new Movie("The Matrix", "the Wachowskis", 1999, "Fantascienza", "Azione");

/* foreach ($movies as $movie) {
    echo $movie->getMovieInfo() . "<br>";
} */
