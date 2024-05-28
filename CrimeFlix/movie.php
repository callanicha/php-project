<?php
require_once 'config.php';

class Movie
{
    private ?int $id;
    private string $title;
    private string $description;
    private string $director;
    private int $released_year;

    public function __construct(string $title, string $description, string $director, int $released_year, int $id = null)
    {
        $this->title = $title;
        $this->description = $description;
        $this->director = $director;
        $this->released_year = $released_year;
        $this->id = $id;
    }

    public function addMovie()
    {
        $query = "INSERT INTO movie (title, description, director, released_year) 
                  VALUES (:title, :description, :director, :released_year)";
        $con = Connection::getConnection();
        $stmt = $con->prepare($query);
        $stmt->execute([
            ':title' => $this->title,
            ':description' => $this->description,
            ':director' => $this->director,
            ':released_year' => $this->released_year
        ]);
    }
 
    public function updateMovie()
    {
        $query = "UPDATE movie SET title = :title, description = :description, director = :director, released_year = :released_year 
                  WHERE id = :id";
        $con = Connection::getConnection();
        $stmt = $con->prepare($query);
        $stmt->execute([
            ':title' => $this->title,
            ':description' => $this->description,
            ':director' => $this->director,
            ':released_year' => $this->released_year,
            ':id' => $this->id
        ]);
    }

    public function deleteMovie()
    {
        $query = "DELETE FROM movie WHERE id = :id";
        $con = Connection::getConnection();
        $stmt = $con->prepare($query);
        $stmt->execute([':id' => $this->id]);
    }

    public static function getAllMovie()
    {
        $query = "SELECT * FROM movie";
        $con = Connection::getConnection();
        $stmt = $con->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public static function getMovieById(int $id) {
        $query = "select * from movie where id=$id";
        $con = Connection::getConnection();

        $stmt = $con->prepare($query);
        $stmt->execute();
        $prodArray = $stmt->fetchAll()[0];
        $MovieById = new Movie($prodArray['title'], $prodArray['description'], $prodArray['director'], $prodArray['released_year'], $prodArray['id']);
        return $MovieById;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getDirector(): string
    {
        return $this->director;
    }

    public function getReleasedYear(): int
    {
        return $this->released_year;
    }

    public function getId(): int
    {
        return $this->id;
    }
}
?>
