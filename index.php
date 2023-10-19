<?php

class Movie
{

    public $title;
    public $director;
    public $year;


    public function __construct($title, $director, $year)
    {
        $this->title = $title;
        $this->director = $director;
        $this->year = $year;
    }


    public function getMovieInfo()
    {
        return "Titolo: {$this->title}, Regista: {$this->director}, Anno: {$this->year}";
    }
}


$movies = [];

$movies[] = new Movie("Kill Bill: Volume 1", "Quentin Tarantino", 2003);
$movies[] = new Movie("The Matrix", "the Wachowskis", 1999);

foreach ($movies as $movie) {
    echo $movie->getMovieInfo() . "<br>";
}
