<?php
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
        //Usamos llaves para variables porque asi evitamos concatenacion y mejoramos legibilidad, aparte es mas exacto.

        foreach ($this->movies as $movie) {
            echo "- " . $movie->getTitle() . "({$movie->getDuration()} min) - Dir: " . $movie->getDirector() . PHP_EOL;
        }

        echo PHP_EOL;
    }

    public function getLongestMovie(): Movie {
        //Contador para almacenar el resultado
        $longest = $this->movies[0];

        foreach($this-> movies as $movie) {
            if($movie->getDuration() > $longest->getDuration()) {
                $longest = $movie;
            }
        }
        return $longest; 
    }
    
}

?>