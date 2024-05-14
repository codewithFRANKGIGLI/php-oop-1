<?php
class Movie {
    // Dichiaro le variabili
    public $title;
    public $year;
    public $genre;

    // Dichiaro il costruttore
    public function __construct($title, &genre, &year)
    {
        $this->title = $title;
        $this->year = $year;
        $this->genre = $genre;
    }

    // Creo un metodo per ottenere ogni variabile
    public function getTitle() {
        return $this->title;
    }
    public function getGenre() {
        return $this->genre;
    } 
    public function getYear() {
        return $this->year;
    }

}
?>