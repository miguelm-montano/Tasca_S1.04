<?php
require_once "Cinema.php";
require_once "Movie.php";

function searchByDirector(array $cinemas, string $director): array {
    $result = [];

    //recorremos los cines
    foreach ($cinemas as $cinema) {
        //recorremos las peliculas
        foreach ($cinema-> getMovies() as $movie) {
            //le decimos que si el director coincide
            if ($movie-> getDirector() === $director) {

                //Guardamos el resultado como un array asociativo
                $result [] = [
                    "Cinema" => $cinema-> getName(),
                    "Title" => $movie-> getTitle(),

                ];
            }
        }
    }
    return $result;  
}

//Test
$movie1 = new Movie(
    "Dune: Part II",
    166,
    "Denis Villeneuve"
    
);

$movie2 = new Movie(
    "Weapons",
    128,
    "Zach Cregger"
    
);

$movie3 = new Movie(
    "Talk to me",
    95,
    "Michael Philippou"
    
);

$cinema1 = new Cinema(
    "Cinesa Diagonal Mar",
    "Avinguda Diagonal 3, Barcelona"
);

$cinema2 = new Cinema(
    "Yelmo Cines Icaria",
    "Carrer de Salvador Espriu 61, Barcelona"
);

$cinema1-> addMovie($movie1);
$cinema1-> addMovie($movie2);
$cinema1-> addMovie($movie3);

$cinema2-> addMovie($movie1);
$cinema2-> addMovie($movie3);

$cinema1-> showMovies();
echo PHP_EOL;
$cinema2-> showMovies();
echo PHP_EOL;
$cinemas = [$cinema1, $cinema2];
$result = searchByDirector($cinemas, "Zach Cregger");
print_r($result);
?>