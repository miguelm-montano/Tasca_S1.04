<?php
/*Imagina que has de presentar el catàleg de pel·lícules d'una cadena de cinemes. Cada cinema té un nom, una població a on pertany, i un llistat de pel·lícules. Cada pel·lícula té un nom, una duració, i un director/a.

Es tracta de fer un programa que ens permeti enregistrar aquesta informació per a després:
Per a cada cinema, mostrar les dades de cada pel·lícula.
Per a cada cinema, mostrar la pel·lícula amb major duració.
Implementa una funció/mètode que cerqui pel nom del director/a pel·lícules en diferents cinemes. No cal repetir pel·lícules.
A més, pots aprofitar aquest exercici per treballar una bona presentació amb HTML+CSS que doni suport a la lògica. */

class Movie {
    private string $title;
    private float $duration;
    private string $director;

    public function __construct(string $title, float $duration, string $director) {
        $this->title = $title;
        $this->duration = $duration;
        $this->director = $director;
    }

    public function getTitle(): string {
        return $this->title;
    }

    public function getDuration(): float {
        return $this->duration;
    }

    public function getDirector(): string {
        return $this->director; 
    }


}

class Cinema {
    private string $name;
    private string $city;
    private array $movies = []; 

    public function __construct(string $name, string $city, array $movies = []) {
        $this->name = $name;
        $this->city = $city;
        $this->movies = $movies; 
    }

    public function getName(): string {
        return $this->name;
    }

    public function addMovie(Movie $movie): void {
        $this->movies[] = $movie;
    }

    public function getMovies(): array {
        return $this->movies; 
    }

    //Show movies
    public function showMovies(): void {
        echo "Cinema: {$this->name} ($this->city)" . PHP_EOL;

        foreach ($this->movies as $movie) {
            echo "- " . $movie->getTitle() . "({$movie->getDuration()} min) - Dir: " . $movie->getDirector() . PHP_EOL;
        }

        echo PHP_EOL;
    }

    public function getLongestMovie(): Movie {
        $longest = $this->movies[0];

        foreach($this-> movies as $movie) {
            if($movie->getDuration() > $longest->getDuration()) {
                $longest = $movie;
            }
        }
        return $longest; 
    }
    

}

function searchByDirector(array $cinemas, string $director): array {
    $result = [];

    //recorremos los cines
    foreach ($cinemas as $cinema) {
        //recorremos las peliculas
        foreach ($cinema-> getMovies() as $movie) {
            //le decimos que si el director coincide
            if ($movie-> getDirector() === $director) {

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