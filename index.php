<?php
    class Movie {
        public $title;
        public $genres;
        public $releaseDate;
        public $originalCountry;
        public $runtime;
        public $budget;

        function __construct($_title, $_genres, $_releaseDate, $_originalCountry, $_runtime, $_budget) {
            $this->title = $_title;
            $this->genres = $_genres;
            $this->releaseDate = $_releaseDate;
            $this->originalCountry = $_originalCountry;
            $this->runtime = $_runtime;
            $this->budget = $_budget;
        }
    }
    
    $inception = new Movie("Inception", ['Action', 'Adventure', 'Thriller'], "July 16, 2010", "United States", "2h 28min", "$160,000,000");
    $oblivion = new Movie("Oblivion", ['Action', 'Adventure', 'Sci-Fi'], "April 19, 2013", "United States", "2h 4min", "$120,000,000");
    
    echo '<pre>';
        var_dump($inception);
    echo '</pre>';
    echo '<pre>';
        var_dump($oblivion);
    echo '</pre>';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP | Movies</title>
</head>
<body>
    <div class="container">
        
    </div>
</body>
</html>






        
