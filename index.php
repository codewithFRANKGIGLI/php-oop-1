<?php
// Collego il file db.php con l'array di films
require_once __DIR__ . '/db.php';

class Movie
{
    // Dichiaro le variabili
    public $title;
    public $year;
    public $genre;

    // Dichiaro il costruttore
    public function __construct($title, $genre, $year)
    {
        $this->title = $title;
        $this->year = $year;
        $this->genre = $genre;
    }

    // Creo un metodo per ottenere ogni variabile
    public function getTitle()
    {
        return $this->title;
    }
    public function getGenre()
    {
        return $this->genre;
    }
    public function getYear()
    {
        return $this->year;
    }
}

// Creo un instanza di 'Movie':
// $movie1 = new Movie("The Matrix", "Action", 1999);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Movies</title>
</head>

<body>
    <h1>Movies</h1>
    <ul>
        <?php foreach ($movies as $movie) { ?>
            <li>
                <?= $movie->getTitle() ?> (<?= $movie->getYear() ?>)
                <ul>
                    <?php foreach ($movie->getGenre() as $genre) { ?>
                        <li><?= $genre ?></li>
                    <?php } ?>
                </ul>
            </li>
        <?php } ?>
    </ul>
</body>

</html>