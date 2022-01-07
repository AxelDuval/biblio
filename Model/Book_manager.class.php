<?php
require_once("Model.class.php");
require_once("entity/Book.class.php");

class Book_manager extends Model
{
    private $books;

    public function addBook($book)
    {
        $this->books[] = $book;
    }

    public function getBooks()
    {
        return $this->books;
    }

    public function loadBooks()
    {
        $req = $this->getBdd()->prepare("SELECT * FROM books");
        $req->execute();
        $myBooks = $req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();

        foreach ($myBooks as $book) {
            $b = new Book($book['id'], $book['title'], $book['author'], $book['release_date'], $book['category'], $book['availablity']);
            $this->addBook($b);
        }
    }
}
