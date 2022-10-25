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

        public function getCaption($mainGenre) {
            ?>
            <p>
                <?=$this->title ?> è un film <?=$mainGenre ?> uscito nelle sale il <?=$this->releaseDate ?> con un budget stimato di circa <?=$this->budget ?>
            </p>
            <?php
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
    <link rel="stylesheet" href="style/my_style.css">
</head>
<body>
    <div class="container">
       <div class="movie-card">
           <ol>
               <li class="movie-title">
                   <strong>Titolo: </strong>
                   <?= $inception->title ?>
               </li>
               <li>
                   <strong>Generi: </strong>
                   <?php
                       foreach($inception->genres as $genre) {
                           echo '<span>'. $genre. ' '.'<span>&#183;</span>'. ' '.  '</span>';
                       }
                   ?>
               </li>
               <li>
                   <strong>Data di uscita: </strong>
                   <?= $inception->releaseDate ?>
               </li>
               <li>
                   <strong>Nazione di origine: </strong>
                   <?= $inception->originalCountry ?>
               </li>
               <li>
                   <strong>Durata: </strong>
                   <?= $inception->runtime ?>
               </li>
               <li>
                   <strong>Budget: </strong>
                   <?= $inception->budget ?>
               </li>
           </ol>
           <?php
               $inception->getCaption("Action");
           ?>
          </div>
          <div class="movie-card">
          <ol>
               <li>
                   <strong>Titolo: </strong>
                   <?= $oblivion->title ?>
               </li>
               <li>
               <strong>Generi: </strong>
                   <?php
                       foreach($oblivion->genres as $genre) {
                           echo '<span>'. $genre. ' '.'<span>&#183;</span>'. ' '.  '</span>';
                       }
                   ?>
               </li>
               <li>
                   <strong>Data di uscita: </strong>
                   <?= $oblivion->releaseDate ?>
               </li>
               <li>
                   <strong>Nazione di origine: </strong>
                   <?= $oblivion->originalCountry ?>
               </li>
               <li>
                   <strong>Durata: </strong>
                   <?= $oblivion->runtime ?>
               </li>
               <li>
                   <strong>Budget: </strong>
                   <?= $oblivion->budget ?>
               </li>
           </ol>
           <?php
               $oblivion->getCaption("Action");
           ?>
          </div> 
       </div>
   </body>
   </html>
       






        
